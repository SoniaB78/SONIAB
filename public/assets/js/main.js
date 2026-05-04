const toggleBtn = document.getElementById('themeToggle');

// Charger préférence utilisateur
if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark');
}

toggleBtn.addEventListener('click', () => {
    const isDark = document.body.classList.toggle('dark');

    toggleBtn.setAttribute('aria-pressed', isDark);

    localStorage.setItem('theme', isDark ? 'dark' : 'light');

    // Sauvegarde
    if (document.body.classList.contains('dark')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
});

const colorButtons = document.querySelectorAll('.color-btn');

// Charger la couleur sauvegardée
const savedTheme = localStorage.getItem('color-theme');

if (savedTheme) {
    document.body.classList.add(`theme-${savedTheme}`);
}

// Click utilisateur
colorButtons.forEach(btn => {
    btn.addEventListener('click', () => {

        const theme = btn.dataset.theme;

        // Reset anciennes classes
        document.body.classList.remove(
            'theme-green',
            'theme-purple',
            'theme-blue',
            'theme-pink'
        );

        // Ajouter la nouvelle
        document.body.classList.add(`theme-${theme}`);

        // Sauvegarder
        localStorage.setItem('color-theme', theme);
    });
});

btn.setAttribute('aria-pressed', 'true');