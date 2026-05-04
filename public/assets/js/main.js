// ========================== INITIALISATION


// On attend que le DOM soit chargé
document.addEventListener('DOMContentLoaded', () => {

    // ========================== ELEMENTS DOM
    const toggleBtn = document.getElementById('themeToggle');
    const colorButtons = document.querySelectorAll('.color-btn');
    const logo = document.getElementById('siteLogo');

    // ========================== CONSTANTES
    const THEMES = ['blue', 'green', 'purple', 'pink'];

    // ========================== FONCTION : UPDATE LOGO
    function updateLogo(theme) {
        if (!logo) return;

        // ⚠️ Chemin absolu (important avec ton routing)
        logo.src = `../public/assets/img/SB-${theme}.png`;
    }

    // ========================== DARK MODE INIT
    const savedDarkMode = localStorage.getItem('theme');

    if (savedDarkMode === 'dark') {
        document.body.classList.add('dark');
        if (toggleBtn) toggleBtn.setAttribute('aria-pressed', 'true');
    }

    // ========================== DARK MODE CLICK
    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {

            const isDark = document.body.classList.toggle('dark');

            // Accessibilité
            toggleBtn.setAttribute('aria-pressed', isDark);

            // Sauvegarde
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });
    }

    // ========================== COLOR THEME INIT
    let savedColorTheme = localStorage.getItem('color-theme');

    // Si aucun thème sauvegardé → défaut = blue
    if (!savedColorTheme) {
        savedColorTheme = 'blue';
    }

    // Appliquer le thème
    document.body.classList.add(`theme-${savedColorTheme}`);
    updateLogo(savedColorTheme);

    // ========================== COLOR THEME CLICK
    colorButtons.forEach(btn => {

        btn.addEventListener('click', () => {

            const theme = btn.dataset.theme;

            // Supprimer anciens thèmes
            THEMES.forEach(t => {
                document.body.classList.remove(`theme-${t}`);
            });

            // Ajouter nouveau thème
            document.body.classList.add(`theme-${theme}`);

            // Sauvegarder
            localStorage.setItem('color-theme', theme);

            // Update logo
            updateLogo(theme);

            // Accessibilité (aria-pressed)
            colorButtons.forEach(b => b.setAttribute('aria-pressed', 'false'));
            btn.setAttribute('aria-pressed', 'true');
        });

    });

});