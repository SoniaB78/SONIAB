// ================================================== INITIALISATION ==================================================
document.addEventListener('DOMContentLoaded', () => {

    // ================================================== ELEMENTS DOM ==================================================

    const body = document.body;

    // Theme picker
    const themePicker = document.querySelector('.theme-picker');
    const themePickerToggle = document.getElementById('themePickerToggle');
    const colorButtons = document.querySelectorAll('.color-btn');

    // Dark mode
    const darkModeToggle = document.getElementById('themeToggle');

    // Logo
    const logo = document.getElementById('siteLogo');

    // ================================================== CONSTANTES ==================================================

    const THEMES = ['blue', 'green', 'purple', 'pink'];

    // ================================================== FONCTION : METTRE À JOUR LE LOGO ==================================================

    function updateLogo(theme) {

        // Sécurité : vérifier que le logo existe
        if (!logo) return;

        // Mise à jour du logo
        logo.src = `../public/assets/img/SB-${theme}.png`;
    }

    // ================================================== FONCTION : METTRE À JOUR LA PASTILLE ACTIVE ==================================================

    function updateCurrentColor(color) {

        // Sécurité
        if (!themePickerToggle) return;

        // Changer la couleur de la pastille principale
        themePickerToggle.style.background = color;
    }

    // ================================================== FONCTION : APPLIQUER UN THÈME ==================================================

    function applyTheme(theme, color = null) {

        // Supprimer anciens thèmes
        THEMES.forEach(t => {
            body.classList.remove(`theme-${t}`);
        });

        // Ajouter nouveau thème
        body.classList.add(`theme-${theme}`);

        // Sauvegarder
        localStorage.setItem('color-theme', theme);

        // Mettre à jour logo
        updateLogo(theme);

        // Mettre à jour la pastille
        if (color) {
            updateCurrentColor(color);
        }
    }

    // ================================================== INITIALISATION DARK MODE ==================================================

    const savedDarkMode = localStorage.getItem('theme');

    // Si dark mode sauvegardé
    if (savedDarkMode === 'dark') {

        body.classList.add('dark');

        // Accessibilité
        if (darkModeToggle) {
            darkModeToggle.setAttribute('aria-pressed', 'true');
        }
    }

    // ================================================== CLICK DARK MODE ================================================== 

    if (darkModeToggle) {

        darkModeToggle.addEventListener('click', () => {

            // Toggle classe dark
            const isDark = body.classList.toggle('dark');

            // Accessibilité
            darkModeToggle.setAttribute('aria-pressed', isDark);

            // Sauvegarde utilisateur
            localStorage.setItem(
                'theme',
                isDark ? 'dark' : 'light'
            );
        });
    }

    // ================================================== INITIALISATION THÈME COULEUR ==================================================

    let savedColorTheme = localStorage.getItem('color-theme');

    // Thème par défaut
    if (!savedColorTheme) {
        savedColorTheme = 'blue';
    }

    // Chercher le bouton correspondant
    const activeButton = document.querySelector(
        `.color-btn[data-theme="${savedColorTheme}"]`
    );

    // Récupérer sa couleur
    const activeColor = activeButton
        ? activeButton.dataset.color
        : '#40adb7';

    // Appliquer thème initial
    applyTheme(savedColorTheme, activeColor);

    // ================================================== OUVERTURE / FERMETURE PICKER ==================================================
    if (themePicker && themePickerToggle) {

        themePickerToggle.addEventListener('click', () => {

            // Toggle ouverture
            themePicker.classList.toggle('open');

            // Etat ouvert ?
            const isOpen = themePicker.classList.contains('open');

            // Accessibilité
            themePickerToggle.setAttribute(
                'aria-expanded',
                isOpen
            );
        });
    }
    // ================================================== FERMETURE SI CLIC À L'EXTÉRIEUR ==================================================

    document.addEventListener('click', (event) => {

        // Si le clic est en dehors du picker
        if (!themePicker.contains(event.target)) {

            themePicker.classList.remove('open');

            themePickerToggle.setAttribute(
                'aria-expanded',
                'false'
            );
        }

    });
    // ==================================================  CLICK SUR UNE COULEUR ==================================================

    colorButtons.forEach(btn => {

        btn.addEventListener('click', () => {

            // Récupération données bouton
            const theme = btn.dataset.theme;
            const color = btn.dataset.color;

            // Appliquer thème
            applyTheme(theme, color);

            // Accessibilité
            colorButtons.forEach(button => {
                button.setAttribute('aria-pressed', 'false');
            });

            btn.setAttribute('aria-pressed', 'true');

            // Fermer le picker après choix
            if (themePicker) {
                themePicker.classList.remove('open');
            }

            if (themePickerToggle) {
                themePickerToggle.setAttribute(
                    'aria-expanded',
                    'false'
                );
            }
        });
    });

    // ==================================================  TOOLTIPS AVEC BOOTSTRAP ==================================================

    
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');

    [...popoverTriggerList].forEach(el => {
        new bootstrap.Popover(el);
    });
    

    // ==================================================   ==================================================

    

    
});