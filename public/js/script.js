const menuOpen = document.getElementById("menu");
const menuClose = document.getElementById("close");
const menu = document.querySelector(".sidebar");
const profile = document.querySelector(".profile");
const dropdown = document.querySelector(".dropdown-content");

let hideTimeout;

profile.addEventListener("mouseenter", () => {
    clearTimeout(hideTimeout);
    dropdown.classList.add("block");
});

profile.addEventListener("mouseleave", () => {
    hideTimeout = setTimeout(() => {
        dropdown.classList.remove("block");
    }, 100);
});

dropdown.addEventListener("mouseenter", () => {
    clearTimeout(hideTimeout);
    dropdown.classList.add("block");
});

dropdown.addEventListener("mouseleave", () => {
    hideTimeout = setTimeout(() => {
        dropdown.classList.remove("block");
    }, 100);
});

menuOpen.addEventListener("click", function (event) {
    event.stopPropagation();
    menu.classList.toggle("view");
});

menuClose.addEventListener("click", function (event) {
    menu.classList.remove("view");
});

document.addEventListener("click", function (event) {
    if (
        !menu.contains(event.target) &&
        !menuOpen.contains(event.target) &&
        menu.classList.contains("view")
    ) {
        menu.classList.remove("view");
    }
});

// image handler
document.querySelectorAll(".product-container").forEach((container) => {
    const mainImage = container.querySelector("img");
    const thumbnails = container.querySelectorAll(".product-images img");

    thumbnails.forEach((thumbnail) => {
        thumbnail.addEventListener("click", () => {
            mainImage.classList.add("hidden");

            setTimeout(() => {
                mainImage.src = thumbnail.src;

                setTimeout(() => {
                    mainImage.classList.remove("hidden");
                }, 40);
            }, 300);

            thumbnails.forEach((img) => img.classList.remove("active"));
            thumbnail.classList.add("active");
        });
    });
});
//
// nav scroll handler
window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    if (window.scrollY > 0) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});
