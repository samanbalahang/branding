document.addEventListener('DOMContentLoaded', () => {
    let desktopMenu = document.querySelector(".desktop-menu");
    let mobilemenu = document.querySelector(".mobile-menu");
    let menu = document.querySelector(".menu");
    let dsitelogo = desktopMenu.querySelector(".site-logo");
    let msitelogo = mobilemenu.querySelector(".site-logo");
    let headerImage = dsitelogo.querySelector("img");
    let mobileheaderImage = msitelogo.querySelector("img");
    let mobileoldsrc = mobileheaderImage.getAttribute("src");
    if (menu) {
        menu.addEventListener("click", () => {
            menu.classList.toggle("open");
            if (desktopMenu) {
                desktopMenu.classList.toggle("open");
                if (dsitelogo) {
                    if (headerImage) {
                        headerImage.setAttribute("src", `${siteurl}/wp-content/images/logo_black.png`);
                    }
                }
            }
            if (black) {
                black.classList.toggle("open");
            }
        })
    }

});