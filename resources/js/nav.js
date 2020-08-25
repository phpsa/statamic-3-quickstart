window.navMenu = {
    toggle() {
        const menu = document.getElementById("js-nav-menu");
        menu.classList.toggle("hidden");
        menu.classList.toggle("lg:block");
        document.getElementById("js-nav-menu-hide").classList.toggle("hidden");
        document.getElementById("js-nav-menu-show").classList.toggle("hidden");
    }
};
