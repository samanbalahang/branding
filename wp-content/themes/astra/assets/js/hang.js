document.addEventListener('DOMContentLoaded', () => {
    let desktopMenu = document.querySelector(".desktop-menu");
    let mobilemenu = document.querySelector(".mobile-menu");
    let headerLogoling = document.getElementById("headerLogoling");
    let dsitelogo = desktopMenu.querySelector(".site-logo");
    let astscrolltop = document.getElementById("scrolltop");
    let msitelogo = mobilemenu.querySelector("img");
    let black = document.getElementById("black");
    let menu = document.querySelectorAll(".menu");
    let scrollshow = document.querySelectorAll(".scroll-show");
    let siteurl = window.location.href;
    let headerImage;
    let oldsrc;
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
    let mobileoldsrc = msitelogo.getAttribute("src");
    let end;
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
            })
        });
    }
    var mySwipera = document.querySelector(".mySwipera");
    if (mySwipera) {
        var swiper = new Swiper(".mySwipera", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            // pagination: {
            //     el: ".swiper-pagination",
            // },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    }
    var mySwiperamob = document.querySelector(".mySwiperamob");
    if (mySwiperamob) {
        var swiper = new Swiper(".mySwiperamob", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    }
    var mySwipera = document.querySelector(".brandsSwiper");
    if (mySwipera) {
        var swiper = new Swiper(".brandsSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            },
        });
    }
    var mySwipera = document.querySelector(".Swiperproject");
    if (mySwipera) {
        var swiper = new Swiper(".Swiperproject", {
            slidesPerView: 1,
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            // autoplay: {
            //     delay: 3500,
            //     disableOnInteraction: false,
            // },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    }
    var mySwipera = document.querySelector(".Swipernews");
    if (mySwipera) {
        var swiper = new Swiper(".Swipernews", {
            slidesPerView: 1,
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            },
        });
    }
    var servicesSwiper = document.querySelector(".servicesSwiper");
    if (servicesSwiper) {
        var swiper = new Swiper(".servicesSwiper", {
            slidesPerView: 1,
            loop: true,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5.5,
                    spaceBetween: 50,
                },
            },
        });

        // توقف autoplay با هاور موس
        servicesSwiper.addEventListener('mouseenter', function () {
            swiper.autoplay.stop();
        });

        // از سرگیری autoplay با خارج شدن موس
        servicesSwiper.addEventListener('mouseleave', function () {
            swiper.autoplay.start();
        });

    }
    let seemorecustomer = document.getElementById("seemorecustomer");
    let morecustomer = document.getElementById("morecustomer");
    if (seemorecustomer) {
        seemorecustomer.addEventListener("click", e => {
            e.preventDefault();
            morecustomer.classList.toggle("hidden");
        })
    }
});