window.addEventListener("DOMContentLoaded", () => {
    
    var mySwipera = document.querySelector(".Swiperproject");
    console.log("mySwipera: ",mySwipera);
    if (mySwipera) {
        var swiper = new Swiper(".Swiperproject", {
            slidesPerView: 1,
            spaceBetween: 10,
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
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 50,
                },
            },
        });
    }
    var mySwipera = document.querySelector(".Swiperportfolio");
    if (mySwipera) {
        var swiper = new Swiper(".Swiperportfolio", {
            slidesPerView: 1,
            spaceBetween: 10,
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
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 50,
                },
            },
        });
    }
})