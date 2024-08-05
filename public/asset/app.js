var R = {
    init: () => {
        R.registerEvents();
    },
    registerEvents: () => {
        $('.btn_search_home').click(() => {
            $('.search_user_container').toggleClass('show');
            $('.inp_search_home').focus();
            $('.search_backdrop').toggleClass('show');
        });
        $('.search_backdrop , .btn_close_search').click(() => {
            $('.search_user_container').removeClass('show');
            $('.search_backdrop').removeClass('show');
        });
        $(window).scroll(() => {
            if ($(this).scrollTop() > 50) {
                $('#user_header').addClass('headerFixed');
            } else {
                $('#user_header').removeClass('headerFixed');
            }
        })
        $('.btn_account_user').click(() => {
            $('.account_user_toggle').toggleClass('show');
        });
        $(document).click(function (event) {
            if (!$(event.target).closest('.btn_account_user, .account_user_toggle').length) {
                $('.account_user_toggle').removeClass('show');
            }
        });
        $('.account_user_toggle').click(function (event) {
            event.stopPropagation();
        });
        $('.clear_search_home').on('click', function () {
            $('.inp_search_home').val('');
        });

        $(document).on('shown.bs.offcanvas', function () {
            $('.offcanvas-backdrop').remove();
            $('.offcanvas_backdrop_custom').addClass('show');
        });

        $(document).on('hidden.bs.offcanvas', function () {
            $('.offcanvas-backdrop').remove();
            $('.offcanvas_backdrop_custom').removeClass('show');
            $('body').css('overflow', 'auto');
        });

        $('.offcanvas_backdrop_custom').click(function() {
            $('.offcanvas-backdrop').remove();
            $('.offcanvas').offcanvas('hide');
            $('.offcanvas_backdrop_custom').removeClass('show');
        });
       
       
    },
}

R.init();
