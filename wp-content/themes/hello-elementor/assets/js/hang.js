document.addEventListener('DOMContentLoaded', () => {
    console.log("f");
    
    const mySwipera = document.querySelector(".mySwipera");
    if (mySwipera) {
        var swiper = new Swiper(".mySwipera", {
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


});