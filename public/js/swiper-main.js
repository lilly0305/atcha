    // 메인 detail 클릭시 모달창 생성
    let detailBtn = document.querySelector('main.swiper .detailBtn'),
    detailModal = document.querySelector('main .detailModal');

    detailBtn.addEventListener('click', function () {
        if (detailBtn.classList.contains('active')) {
            detailBtn.classList.remove('active');
            detailBtn.innerHTML = (' <span>Detail</span>');
            detailModal.style.opacity = '0';
        } else {
            detailBtn.classList.add('active');
            detailBtn.innerHTML = (' <span>Close</span>');
            detailModal.style.opacity = '1';
        }
    });

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
        slidesPerView : "auto", // 동시에 보여줄 슬라이드 갯수
        spaceBetween: 30,
        loopedSlides: 50
    });




