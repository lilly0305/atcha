
    $(document).ready(function () {

    $('.profile li').click(function () {
        $(this).children('figure').addClass('active');
        $(this).siblings().hide(500);
        $(this).children('span').animate({
            opacity: '1'
        });

        $('.backArrow').animate({
            opacity: '1'
        });
        $('.start button').animate({
            opacity: '1'
        });

        $('.profileWrap section strong').css({
            'color': '#707070'
        });

    });

    $('.backArrow').click(function () {
    $('.profile li').children('figure').removeClass('active');
    $('.profile li').siblings().show(500);
    $('.profile li').children('span').animate({
    opacity: '0'
});
    $(this).animate({
    opacity: '0'
});
    $('.start button').animate({
    opacity: '0'
});
    $('.profileWrap section strong').css({
    'color': '#F87387'
});

});

});




