var R = {
    init: function () {
        R.registerEvent();
    },
    registerEvent: function () {

    var mySwiper = new Swiper('.mySwiper', {
        speed: 1000, // Thời gian chuyển slide là 1000ms (1 giây)
        autoplay: {
            delay: 5000, // Thời gian giữa các lần chuyển slide tự động là 5000ms (5 giây)
            disableOnInteraction: false, // Không dừng autoplay khi người dùng tương tác
        },
        loop: true, // Quay lại slide đầu tiên khi đến slide cuối cùng
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Cho phép người dùng nhấp vào các chấm để chuyển slide
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            slideChangeTransitionEnd: function () {
                if(window.innerWidth > 990 ){
                    R.updateBiggerClass();
                }
            }
        }
    });
    },
};
R.init();
