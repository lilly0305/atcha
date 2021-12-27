    // 메인 스와이퍼
    var swiper1 = new Swiper(".mainSlider", {
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
        swiper1.autoplay.stop();
        $('.swiper-progress-bar').removeClass('animate');
    }, function(){
        swiper1.autoplay.start();
        $('.swiper-progress-bar').addClass('animate');
    });


    // 무한 영화 리스트
    var swiper2 = new Swiper(".list1", {
        loop : true,
        slidesPerView : 5.5, // 동시에 보여줄 슬라이드 갯수
        spaceBetween: 30,
    });


    // 오늘은 이 영화 어때요
    var swiper3 = new Swiper(".todayPoster", {
        loop : true,
        slidesPerView : 3.5, // 동시에 보여줄 슬라이드 갯수
    });





