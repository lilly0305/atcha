let slides = document.querySelector('.slides'),
    slide = document.querySelectorAll('.slides li'),
    currentIdx = 0,
    slideCount = slide.length,
    slideWidth = document.querySelector('.slides li').offsetWidth,
    slideMargin = 30,
    prevBtn = document.querySelector('.sideBtn .prev'),
    nextBtn = document.querySelector('.sideBtn .next');

makeClone();

console.log(slideWidth);

function makeClone() {
    // 슬라이드 개수에 따라 앞/뒤에 추가
    for (var i = 0; i < slideCount; i++) {

        // a.cloneNode()-a요소 복사, a.cloneNode(true)-a의 자식요소까지 복사
        let cloneSlide = slide[i].cloneNode(true);

        // 기존 슬라이드와 구분하기 위해 클래스면 add
        cloneSlide.classList.add('clone');
        // a.appendChild(b) -a에 b 추가
        slides.appendChild(cloneSlide);
    }
    for (var i = slideCount - 1; i >= 0; i--) {
        // a.cloneNode()-a요소 복사, a.cloneNode(true)-a의 자식요소까지 복사
        let cloneSlide = slide[i].cloneNode(true);

        // 기존 슬라이드와 구분하기 위해 클래스면 add
        cloneSlide.classList.add('clone');

        // a.prepend(b) -a에 b 추가
        slides.prepend(cloneSlide);
    }

    // ul의 전체 너비
    updateWidth();

    setInitialPos();

    setTimeout(function () {
        // 첫 transiton이 안 보이게끔
        slides.classList.add('animated');
    }, 100);
}

function updateWidth() {
    // ul 전체 너비 계산
    let currentSlides = document.querySelectorAll('.slides li');
    let newSlideCount = currentSlides.length;

    let newWidth = (slideWidth + slideMargin) * newSlideCount - slideMargin + 'px';

    slides.style.width = newWidth;

}

function setInitialPos() {
    // 원래 슬라이드 01이 맨 앞으로 오게끔
    let initialTranslateValue = -(slideWidth + slideMargin) * slideCount;
    slides.style.transform = 'translateX(' + initialTranslateValue + 'px)';

}

nextBtn.addEventListener('click', function () {
    moveSlide(currentIdx + 1);
    this.classList.add('active');
    prevBtn.classList.remove('active');
});

prevBtn.addEventListener('click', function () {
    moveSlide(currentIdx - 1);
    this.classList.add('active');
    nextBtn.classList.remove('active');
});

function moveSlide(num) {
    slides.style.left = -num * (slideWidth + slideMargin) + 'px';
    currentIdx = num;

    if(currentIdx == slideCount || currentIdx == -slideCount){
        setTimeout(function(){
            slides.classList.remove('animated');
            slides.style.left = '0px';
            currentIdx = 0;
        },500);

        setTimeout(function(){
            slides.classList.add('animated');
        },600)

    }

}
