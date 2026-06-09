window.addEventListener("DOMContentLoaded", () => {
    let desktopMenu = document.querySelector(".desktop-menu");
    let mobilemenu = document.querySelector(".mobile-menu");
    let dsitelogo = desktopMenu.querySelector(".site-logo");
    let primaryMenu = document.querySelector(".primary");
    let msitelogo = mobilemenu.querySelector("img");
    let menu = document.querySelectorAll(".menu");
    let astscrolltop = document.getElementById("scrolltop");
    let siteurl = window.location.href;
    let scrollshow = document.querySelectorAll(".scroll-show");
    let mobileoldsrc;
    if (primaryMenu) {
        let menus = primaryMenu.querySelectorAll("li a");
        if (menus.length > 0) {
            menus.forEach(menu => {
                menu.addEventListener("click", e => {
                    hrefs = menu.getAttribute("href");
                    if (hrefs[0] == "#") {
                        e.preventDefault();
                        sectionplace = hrefs.substring(1);
                        menusectionone = document.getElementById(sectionplace);
                        menusectionone.scrollIntoView({ behavior: "smooth" });
                        menuopenet();
                    } else {
                        return
                    }

                })

            })
        }
    }
    if (astscrolltop) {
        astscrolltop.addEventListener("click", (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // برای اسکرول نرم
            })
        })
    }
    if (dsitelogo) {
        headerImage = dsitelogo.querySelector("img");
        oldsrc = headerImage.getAttribute("src");
    }
    mobileoldsrc = msitelogo.getAttribute("src");

    if (siteurl.search(".com") != -1) {
        end = parseInt(siteurl.search(".com") + 4);
        siteurl = siteurl.substring(0, end);
    }
    if (screen.availWidth > 768) {
        if (desktopMenu) {
            window.addEventListener("scroll", () => {
                if (window.scrollY > 50) {
                    desktopMenu.classList.add("on-scroll");
                    if (dsitelogo) {
                        if (headerImage) {
                            headerImage.setAttribute("src", `${siteurl}/wp-content/images/logo_black.png`);
                        }
                    }
                    if (astscrolltop) {
                        astscrolltop.classList.remove("force-hidden");
                    }
                } else {
                    desktopMenu.classList.remove("on-scroll");
                    if (headerImage) {
                        headerImage.setAttribute("src", `${oldsrc}`);
                    }
                    if (astscrolltop) {
                        astscrolltop.classList.add("force-hidden");
                    }
                }
                if (scrollshow && scrollshow.length > 0) {
                    if (window.scrollY > 500) {
                        scrollshow.forEach(item => {
                            item.classList.add("open")
                        })
                    } else {
                        scrollshow.forEach(item => {
                            item.classList.remove("open")
                        })
                    }
                }
            });
        }
    } else {
        if (mobilemenu) {
            window.addEventListener("scroll", () => {
                if (window.scrollY > 50) {
                    mobilemenu.classList.add("on-scroll");
                    if (msitelogo) {
                        msitelogo.setAttribute("src", `${siteurl}/wp-content/images/logo_black.png`);
                    }
                } else {
                    mobilemenu.classList.remove("on-scroll");
                    msitelogo.setAttribute("src", `${mobileoldsrc}`);
                }
                if (scrollshow && scrollshow.length > 0) {
                    if (window.scrollY > 500) {
                        scrollshow.forEach(item => {
                            item.classList.add("open")
                        })
                    } else {
                        scrollshow.forEach(item => {
                            item.classList.remove("open")
                        })
                    }
                }
            });
        }
    }
    if (black) {
        black.addEventListener("click", () => {
            black.classList.remove("open");
            desktopMenu.classList.remove("open");
            menu.classList.remove("open");
        })
    }
    if (menu.length > 0) {
        menu.forEach(item => {
            item.addEventListener("click", () => {
                // item.classList.toggle("open");
                menuopenet();
            })
        });
    }
    menuopenet = () => {
        if (desktopMenu) {
            desktopMenu.classList.toggle("open");
            if (dsitelogo) {
                if (headerImage) {
                    headerImage.setAttribute("src", `${siteurl}/wp-content/images/logo_black.png`);
                }
            }
            if (black) {
                black.classList.toggle("open");
            }
        }
    }
})