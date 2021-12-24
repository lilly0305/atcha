    // 메인 스와이퍼
    var swiper = new Swiper(".mainSlider", {
        effect: 'fade',
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        speed: 500,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            type: "fraction"
        },

        on: {
            init: function () {
                $(".swiper-progress-bar").removeClass("animate");
                $(".swiper-progress-bar").removeClass("active");
                $(".swiper-progress-bar").eq(0).addClass("animate");
                $(".swiper-progress-bar").eq(0).addClass("active");
            },
            slideChangeTransitionStart: function () {
                $(".swiper-progress-bar").removeClass("animate");
                $(".swiper-progress-bar").removeClass("active");
                $(".swiper-progress-bar").eq(0).addClass("active");
            },
            slideChangeTransitionEnd: function () {
                $(".swiper-progress-bar").eq(0).addClass("animate");
            }
        }
    });

    $('.mainSlider').hover(function() {
        swiper.autoplay.stop();
        $('.swiper-progress-bar').removeClass('animate');
    }, function(){
        swiper.autoplay.start();
        $('.swiper-progress-bar').addClass('animate');
    });


    var swiper = new Swiper(".list1", {
        loop : true,
        slidesPerView : 5.5, // 동시에 보여줄 슬라이드 갯수
        spaceBetween: 30,

    });
