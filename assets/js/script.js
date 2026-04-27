
document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector("nav ul");

    
    const burger = document.createElement("div");
    burger.classList.add("burger");
    burger.innerHTML = "☰";
    document.querySelector("header").prepend(burger);

    burger.addEventListener("click", () => {
        nav.classList.toggle("open");
    });

    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute("href"))
                ?.scrollIntoView({ behavior: "smooth" });
        });
    });

    
    const form = document.querySelector("form");
    if (form) {
        form.addEventListener("submit", (e) => {
            const name = form.querySelector('input[name="name"]').value.trim();
            const email = form.querySelector('input[name="email"]').value.trim();
            const message = form.querySelector('textarea[name="message"]').value.trim();

            if (!name || !email || !message) {
                alert("Пожалуйста, заполните все поля!");
                e.preventDefault();
            }

            if (!email.includes("@")) {
                alert("Введите корректный email!");
                e.preventDefault();
            }
        });
    }

    
    document.querySelectorAll("button").forEach(btn => {
        btn.addEventListener("mouseenter", () => {
            btn.style.transform = "scale(1.1)";
        });
        btn.addEventListener("mouseleave", () => {
            btn.style.transform = "scale(1)";
        });
    });
});
