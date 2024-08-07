var R = {
    init: function () {
        R.registerEvent();
        if(window.innerWidth>990)R.updateBiggerClass();
    },
    registerEvent: function () {
        if (window.innerWidth > 990) {
            console.log('Chiều rộng màn hình lớn hơn 990px');
            // Thực hiện các hành động JavaScript khi màn hình lớn hơn 990px
            R.Enlarge();
            R.MoveRight();
            R.ScrollDown();
            R.ScrollUp_1();
            R.ScrollUp_2();
        }else {
            console.log('Chiều rộng màn hình không lớn hơn 990px');
        }


        // Initialize Swiper
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

    // Update class on navigation button click
    $('.swiper-button-next, .swiper-button-prev').on('click', function () {
        R.updateBiggerClass();
    });
    //change src img
    const $img1 = $('.img_1');

    $('.imgContainer_2 .img_2, .imgContainer_3 .img_3, .imgContainer_4 .img_4, .imgContainer_5 .img_5').click(function () {
        // Swap the src of img_1 with the clicked image
        const tempSrc = $img1.attr('src');
        $img1.attr('src', $(this).attr('src'));
        $(this).attr('src', tempSrc);
    });





    },

    Enlarge: function () {
        let lastScrollTop = 0;
        let scale = 1;
        const maxScale = 1.1;
        const minScale = 1;
        const scaleStep = 0.005;
        const imgContainer = $('.imgContainer_1');
        const section = $('#section_2');

        // Kiểm tra sự tồn tại của phần tử section trước khi tiếp tục
        if (section.length === 0) {
            console.error('Section with class .section_2 not found.');
            return;
        }

        function onScroll() {
            let currentScrollTop = $(window).scrollTop();
            let sectionOffsetTop = section.offset().top;
            let sectionHeight = section.outerHeight();
            let windowHeight = $(window).height();

            // Kiểm tra nếu người dùng đang cuộn trong phạm vi của section_2
            if (currentScrollTop + windowHeight > sectionOffsetTop && currentScrollTop < sectionOffsetTop + sectionHeight) {
                if (currentScrollTop > lastScrollTop && scale < maxScale) {
                    scale += scaleStep;
                } else if (currentScrollTop < lastScrollTop && scale > minScale) {
                    scale -= scaleStep;
                }

                // Giới hạn scale trong khoảng từ minScale đến maxScale
                scale = Math.max(minScale, Math.min(scale, maxScale));

                // Áp dụng transform và transition cho imgContainer
                imgContainer.css({
                    'transform': `scale(${scale})`,
                    'transition': 'transform 100ms ease-out'
                });

                // Cập nhật lastScrollTop
                lastScrollTop = currentScrollTop;
            }

            // Tiếp tục lắng nghe sự kiện scroll
            requestAnimationFrame(onScroll);
        }

        // Bắt đầu lắng nghe sự kiện scroll
        requestAnimationFrame(onScroll);

    },
    MoveRight: function () {
        let lastScrollTop = 0;
        let translateX = 0;
        const maxTranslateX = 0;
        const minTranslateX = -60;
        const translateStep = 1; // Giá trị nhỏ hơn để di chuyển mượt mà hơn
        const transitionDuration = '1ms'; // Thời gian chuyển đổi ngắn hơn để di chuyển mượt mà

        $(window).scroll(function () {
            let currentScrollTop = $(this).scrollTop();

            if (currentScrollTop > lastScrollTop && translateX < maxTranslateX) {
                // Scrolling down
                translateX += translateStep;
            } else if (currentScrollTop < lastScrollTop && translateX > minTranslateX) {
                // Scrolling up
                translateX -= translateStep;
            }

            // Ensure translateX stays within the bounds
            translateX = Math.max(minTranslateX, Math.min(maxTranslateX, translateX));

            $('.imgContainer_2').css({
                '--translateX': translateX + 'px',
                'transform': `translateX(${translateX}px)`,
                'transition': `transform ${transitionDuration} ease-out`
            });

            lastScrollTop = currentScrollTop;
        });
    },

    ScrollDown: function () {
        const minTranslateY = -50; // Set the minimum translateY value to -50
        const maxTranslateY = 0; // Maximum translateY value
        let lastScrollTop = 0; // Initial lastScrollTop should be 0
        let translateY = maxTranslateY;
        const translateStep = 2.5; // Smaller value for smoother movement
        const transitionDuration = '100ms'; // Shorter transition duration for smoother movement

        $(window).scroll(function () {
            let currentScrollTop = $(this).scrollTop();

            if (currentScrollTop > lastScrollTop) {
                // Scrolling down
                translateY += translateStep;
            } else if (currentScrollTop < lastScrollTop) {
                // Scrolling up
                translateY -= translateStep;
            }

            // Ensure translateY stays within the bounds
            translateY = Math.max(minTranslateY, Math.min(maxTranslateY, translateY));

            $('.imgContainer_5').css({
                'transform': `translateY(${translateY}px)`,
                'transition': `transform ${transitionDuration} ease-out`
            });

            lastScrollTop = currentScrollTop;
        });
    },


    ScrollUp_1: function () {
        const containerClass = '.beachImgContainer'; // Class của phần tử container
        const minTranslateY = -60; // Giá trị dịch chuyển tối thiểu
        const maxTranslateY = 0; // Giá trị dịch chuyển tối đa
        let lastScrollTop = 0; // Biến lưu trữ vị trí cuộn trước đó
        let translateY = maxTranslateY; // Khởi đầu từ giá trị tối đa khi cuộn xuống

        const translateStep = 2.5; // Giá trị bước dịch chuyển
        const transitionDuration = '100ms'; // Thời gian chuyển đổi

        let isScrollingDown = true; // Biến theo dõi hướng cuộn
        let isInView = false; // Biến theo dõi trạng thái của phần tử ảnh trong vùng nhìn thấy

        $(window).scroll(function () {
            let currentScrollTop = $(this).scrollTop(); // Vị trí cuộn hiện tại
            let containerTop = $(containerClass).offset().top; // Vị trí trên cùng của phần tử container
            let containerBottom = containerTop + $(containerClass).outerHeight(); // Vị trí dưới cùng của phần tử container
            let windowBottom = $(window).scrollTop() + $(window).height(); // Vị trí dưới cùng của cửa sổ
            let windowTop = $(window).scrollTop(); // Vị trí trên cùng của cửa sổ

            // Kiểm tra xem phần tử container có nằm trong vùng nhìn thấy của cửa sổ
            if (windowBottom > containerTop && windowTop < containerBottom) {
                if (!isInView) {
                    // Nếu phần tử ảnh chưa nằm trong vùng nhìn thấy, thiết lập trạng thái
                    isInView = true;
                    translateY = isScrollingDown ? maxTranslateY : minTranslateY; // Đặt lại giá trị translateY theo hướng cuộn
                }

                // Kiểm tra xem cuộn xuống hay cuộn lên
                if (currentScrollTop > lastScrollTop) {
                    // Cuộn xuống
                    if (translateY > minTranslateY) {
                        translateY -= translateStep; // Giảm giá trị translateY
                        translateY = Math.max(translateY, minTranslateY); // Đảm bảo translateY không nhỏ hơn minTranslateY
                    } else {
                        isScrollingDown = false; // Nếu đã đạt đến minTranslateY, dừng cuộn xuống
                    }
                } else {
                    // Cuộn lên
                    if (translateY < maxTranslateY) {
                        translateY += translateStep; // Tăng giá trị translateY
                        translateY = Math.min(translateY, maxTranslateY); // Đảm bảo translateY không lớn hơn maxTranslateY
                    } else {
                        isScrollingDown = true; // Nếu đã đạt đến maxTranslateY, dừng cuộn lên
                    }
                }

                $('.imgContainer_3').css({
                    'transform': `translateY(${translateY}px)`, // Áp dụng giá trị translateY lên phần tử
                    'transition': `transform ${transitionDuration} ease-out` // Thiết lập hiệu ứng chuyển đổi
                });

                lastScrollTop = currentScrollTop; // Cập nhật vị trí cuộn trước đó
            } else {
                // Khi phần tử ảnh không còn trong vùng nhìn thấy của cửa sổ
                if (isInView) {
                    // Nếu phần tử ảnh đã từng nằm trong vùng nhìn thấy, đặt lại trạng thái
                    isInView = false;
                    translateY = isScrollingDown ? maxTranslateY : minTranslateY; // Đặt lại giá trị translateY
                    $('.imgContainer_3').css({
                        'transform': `translateY(${translateY}px)`, // Áp dụng giá trị translateY lên phần tử
                        'transition': `transform ${transitionDuration} ease-out` // Thiết lập hiệu ứng chuyển đổi
                    });
                }
            }
        });

    },

    ScrollUp_2: function () {
        const containerClass = '.beachImgContainer'; // Class của phần tử container
        const minTranslateY = 50; // Giá trị dịch chuyển tối thiểu
        const maxTranslateY = 80; // Giá trị dịch chuyển tối đa
        let lastScrollTop = 0; // Biến lưu trữ vị trí cuộn trước đó
        let translateY = maxTranslateY; // Khởi đầu từ giá trị tối đa khi cuộn xuống

        const translateStep = 2.5; // Giá trị bước dịch chuyển
        const transitionDuration = '100ms'; // Thời gian chuyển đổi

        let isScrollingDown = true; // Biến theo dõi hướng cuộn
        let isInView = false; // Biến theo dõi trạng thái của phần tử ảnh trong vùng nhìn thấy

        $(window).scroll(function () {
            let currentScrollTop = $(this).scrollTop(); // Vị trí cuộn hiện tại
            let containerTop = $(containerClass).offset().top; // Vị trí trên cùng của phần tử container
            let containerBottom = containerTop + $(containerClass).outerHeight(); // Vị trí dưới cùng của phần tử container
            let windowBottom = $(window).scrollTop() + $(window).height(); // Vị trí dưới cùng của cửa sổ
            let windowTop = $(window).scrollTop(); // Vị trí trên cùng của cửa sổ

            // Kiểm tra xem phần tử container có nằm trong vùng nhìn thấy của cửa sổ
            if (windowBottom > containerTop && windowTop < containerBottom) {
                if (!isInView) {
                    // Nếu phần tử ảnh chưa nằm trong vùng nhìn thấy, thiết lập trạng thái
                    isInView = true;
                    translateY = isScrollingDown ? maxTranslateY : minTranslateY; // Đặt lại giá trị translateY theo hướng cuộn
                }

                // Kiểm tra xem cuộn xuống hay cuộn lên
                if (currentScrollTop > lastScrollTop) {
                    // Cuộn xuống
                    if (translateY > minTranslateY) {
                        translateY -= translateStep; // Giảm giá trị translateY
                        translateY = Math.max(translateY, minTranslateY); // Đảm bảo translateY không nhỏ hơn minTranslateY
                    } else {
                        isScrollingDown = false; // Nếu đã đạt đến minTranslateY, dừng cuộn xuống
                    }
                } else {
                    // Cuộn lên
                    if (translateY < maxTranslateY) {
                        translateY += translateStep; // Tăng giá trị translateY
                        translateY = Math.min(translateY, maxTranslateY); // Đảm bảo translateY không lớn hơn maxTranslateY
                    } else {
                        isScrollingDown = true; // Nếu đã đạt đến maxTranslateY, dừng cuộn lên
                    }
                }

                $('.imgContainer_4').css({
                    'transform': `translateY(${translateY}px)`, // Áp dụng giá trị translateY lên phần tử
                    'transition': `transform ${transitionDuration} ease-out` // Thiết lập hiệu ứng chuyển đổi
                });

                lastScrollTop = currentScrollTop; // Cập nhật vị trí cuộn trước đó
            } else {
                // Khi phần tử ảnh không còn trong vùng nhìn thấy của cửa sổ
                if (isInView) {
                    // Nếu phần tử ảnh đã từng nằm trong vùng nhìn thấy, đặt lại trạng thái
                    isInView = false;
                    translateY = isScrollingDown ? maxTranslateY : minTranslateY; // Đặt lại giá trị translateY
                    $(classImg).css({
                        'transform': `translateY(${translateY}px)`, // Áp dụng giá trị translateY lên phần tử
                        'transition': `transform ${transitionDuration} ease-out` // Thiết lập hiệu ứng chuyển đổi
                    });
                }
            }
        });

    },
    updateBiggerClass: function () {
        $('.carouselContainer .swiper-slide img').removeClass('bigger');
        $('.carouselContainer .swiper-slide-active img').addClass('bigger');
    }



};
R.init();
