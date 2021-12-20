<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/movies.css">

    {{--  swiper css  --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- 구글 아이콘 -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Atcha</title>
</head>
<body>
<div id="wrap">
    <header>
        <div class="headerWrap">
            <span>2021.12.08 잠이 솔솔, 지금은 2시</span>
            <a href="/movies"><img src="img/logo.png" alt="Atcha logo"></a>
            <div>
                <p>
                    <img src="/img/profile1.jpg" alt="프로필 샘플1">
                </p>
            </div>
        </div>
    </header>

    <div class="topDivider">
        <img src="/img/divider.png" alt="">
    </div>

    <main>
        <!-- Slider main container -->
        <div class="swiper-container mainSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/main-banner1.jpg" alt="">
                    <div class="progressbar">
                        <span></span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/main-banner2.jpg" alt="">
                    <div class="progressbar">
                        <span></span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/main-banner3.jpg" alt="">
                    <div class="progressbar">
                        <span></span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="img/main-banner4.jpg" alt="">
                    <div class="progressbar">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main swiper slides -->
    </main>

    <div class="sectionDivider dLeft">
        <div class="divider"></div>
        <p>오늘은 이 영화 어때요</p>
    </div>

    <section class="todayMovies sectionWrap">

        <div class="recommendToday">
            <div class="recLeft">
                <figure>
                    <img src="/img/poster/RomeoJuliet.jpg" alt="">
                </figure>

                <p>
                    비슷한 분위기의 영화
                    <span class="material-icons">
                        play_arrow
                    </span>
                </p>
            </div>

            <div class="recRight">
                <div class="movieDetail">
                    <div class="rate">
                        <p>로미오와 줄리엣 <small>(Romeo & Juliet)</small></p>
                        <div class="star">
                            <span class="material-icons">
                              star
                            </span>
                            <span class="material-icons">
                              star
                            </span>
                            <span class="material-icons">
                              star
                            </span>
                            <span class="material-icons">
                              star
                            </span>
                            <span class="material-icons">
                              star_half
                            </span>
                            <strong>4.5</strong>
                        </div>
                        <ul>
                            <li>개봉 : 1978.12.30</li>
                            <li>등급 : 12세 관람가</li>
                            <li>장르 : 드라마, 멜로/로맨스</li>
                        </ul>

                        <button type="button">
                            <span>Play
                              <span class="material-icons">
                                play_arrow
                              </span>
                            </span>
                        </button>
                    </div>

                    <div class="story">
                        <p>
                            비슷한 품위의 두 집안은 이 이야기가 전개되는 아름다운 '베로나'에서 오래전의 원한이 새로운 문제를 야기하는,
                            예의바른 사람들의 피가 예의바른 사람들의 손을 더럽게 한다. 이 두 적의 자식들에 이어서 두 운명에 꼬인 두 연인은
                            자신의 생명을 빼앗아 그들 부모의 분쟁을 묻게 한다. 몬태그가와 캐플렛가는 원수지간으로 항상 분쟁이 그칠 날이 없었다.
                            캐플렛가의 축제에 참가한 몬태그가의 로미오와 줄리엣은 첫눈에 사랑에 빠진다.
                        </p>
                        <p>
                            비슷한 품위의 두 집안은 이 이야기가 전개되는 아름다운 '베로나'에서 오래전의 원한이 새로운 문제를 야기하는,
                            예의바른 사람들의 피가 예의바른 사람들의 손을 더럽게 한다. 이 두 적의 자식들에 이어서 두 운명에 꼬인 두 연인은
                            자신의 생명을 빼앗아 그들 부모의 분쟁을 묻게 한다. 몬태그가와 캐플렛가는 원수지간으로 항상 분쟁이 그칠 날이 없었다.
                            캐플렛가의 축제에 참가한 몬태그가의 로미오와 줄리엣은 첫눈에 사랑에 빠진다.
                        </p>
                    </div>

                </div>

                <div class="todayPoster">
                    <div class="slides">
                        <div class="swiper-slide">
                            <img src="/img/poster/Leon.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/img/poster/BackTotheFuture.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/img/poster/GhostBusters.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/img/poster/Scarface.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="/img/poster/Leon.jpg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    {{--  오늘의 영화 section 끝  --}}

    <div class="sectionDivider dRight">
        <p>불후의 명작 Atcha에서</p>
        <div class="divider right"></div>
    </div>

    <section class="masterpiece">
        <ul class="posters">
            <li>
                <img src="/img/poster/moderntimes.jpg" alt="모던 타임즈 포스터">
                <div>
                    <p>모던타임즈 <small>(Romeo & Juliet)</small></p>
                    <button type="button">
                        <span>Detail</span>
                    </button>
                </div>
            </li>
            <li>
                <img src="/img/poster/gonwiththewind.jpg" alt="">
            </li>
            <li>
                <img src="/img/poster/RomanHoliday.jpg" alt="">
            </li>
            <li>
                <img src="/img/poster/SingingIntheRain.jpg" alt="">
            </li>
            <li>
                <img src="/img/poster/SoundOfMusic.jpg" alt="">
            </li>
        </ul>
    </section>

</div>


{{-- 제이쿼리 --}}
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-migrate-1.4.1.min.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/universal-tilt.js/"></script>
<script src="/js/swiper-main.js"></script>

<script>

</script>
</body>
</html>
