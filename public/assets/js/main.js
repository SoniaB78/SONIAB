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