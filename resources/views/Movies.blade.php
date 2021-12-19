<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/movies.css">

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
</div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="/js/swiper-main.js"></script>
</body>
</html>
