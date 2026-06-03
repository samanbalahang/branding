window.addEventListener("DOMContentLoaded", () => {
    let siteurl = window.location.href;
    let end;
    console.log("end:" ,end);
    console.log("end:" ,siteurl.search(".com"));
    if (siteurl.search(".com") != -1) {
        end = parseInt(siteurl.search(".com") + 4);
        console.log("end:" ,end);
        siteurl = siteurl.substring(0, end);
        console.log("siteurl: " ,siteurl);
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
                } else {
                    desktopMenu.classList.remove("on-scroll");
                    if (headerImage) {
                        headerImage.setAttribute("src", `${oldsrc}`);
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
                    console.log("msitelogo: ", msitelogo);
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
})