<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/profile.css">

    <title>Atcha profile</title>
</head>
<body>
    <div id="fullScreen">
        <div class="profileWrap">
            <section>
                <p>그 시절, 당신이 사랑했던 고전 영화를 지금 만나보세요.</p>
                <strong>Choose Your Profile</strong>
            </section>

            <ul class="profile" id="profile">
                <li>
                    <figure>
                        <img src="/img/profile1.jpg" alt="">
                    </figure>
                    <span>Profile1</span>
                </li>

                <li>
                    <figure>
                        <img src="/img/profile5.jpg" alt="">
                    </figure>
                    <span>Profile2</span>
                </li>

                <li>
                    <figure>
                        <img src="/img/profile3.jpg" alt="">
                    </figure>
                    <span>Profile3</span>
                </li>
            </ul>

            <img class="backArrow" src="/img/back.png" alt="뒤로가기 버튼">

            <div class="start">
                <button type="submit"><span>START</span></button>
            </div>
        </div>
        </div>
    </div>


    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/jquery-migrate-1.4.1.min.js"></script>

    <script>
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
    </script>
</body>
</html>
