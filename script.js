const toggle = document.querySelector(".switch input");

toggle.addEventListener("change", () => {
    document.body.classList.toggle("dark", toggle.checked);
});
