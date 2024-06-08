jQuery(document).ready(function($){

    $('.coach-carousel').slick({
        // autoplay: true,
        prevArrow: '<span class="slide-nav_left"><i class="fa fa-angle-left" aria-hidden="true"></i></span>',
        nextArrow: '<span class="slide-nav_right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>',
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.button_primary').on('click', function (e) {
        e.preventDefault();
        var check = $(this).data('text');
        if (check === 'записаться на курс') $('#regModal').arcticmodal();
        var title = $('.course__w').find('.break-lines__inner').html();
        if (title !== undefined) $('input[name=your-packet]').val(title);
    });

    $('.header__button').on('click', function (e) {
        e.preventDefault();
        var check = $(this).data('text');
        $('#regModal').arcticmodal();
    });
    $('.hero__video-button').on('click', function (e) {
        e.preventDefault();
        $('#videoModal').arcticmodal();
    });

});