const toggle = document.createElement("button");
toggle.innerText = "Dark mode";
toggle.classList.add("btn", "btn-secondary");
document.body.prepend(toggle);

toggle.addEventListener("click", () => {
    document.body.classList.toggle("dark");
});

document.getElementById('themeToggle').addEventListener('click', () => {
    document.body.classList.toggle('dark');
});