//swiper slider
var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    loop: true,
    centeredSlides: true,
    slidesPerView: 4,
    initialSlide: 0,
    keyboardControl: true,
    mousewheelControl: false,
    lazyLoading: true,
    preventClicks: true,
    preventClicksPropagation: false,
    lazyLoadingInPrevNext: true,   
    autoplay: 1500, 
    speed: 1000,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    breakpoints: {
        768: {
            slidesPerView: 3,
        },
        640: {
            slidesPerView: 2,
        },
        320: {
            slidesPerView: 1,
        }
    }
});

//Owl Carousel
$("#twitter-testi").owlCarousel({
    autoPlay: 3000,
    stopOnHover: true,
    navigation: false,
    paginationSpeed: 1000,
    goToFirstSpeed: 2000,
    singleItem: true,
    autoHeight: true,
    items: 1,
});

$("#mobile-slider").owlCarousel({
    autoPlay: 3000,
    stopOnHover: true,
    navigation: false,
    paginationSpeed: 1000,
    goToFirstSpeed: 2000,
    singleItem: true,
    autoHeight: true,
    items: 1,
});

//Cta Video
$('.video-play-icon').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
});
// aos.init.js
AOS.init({
    easing: 'ease-in-out-sine',
    duration: 1000
});

//Nicescroll
$("body").niceScroll({   
    cursorcolor:"rgba(108, 117, 125, 0.7)",
    cursorwidth:"10px",             
    background:"rgba(0,0,0,0.15)",
    scrollspeed: 50,
    mousescrollstep: 50,
    cursorborder: 0,
    zindex: 999,
    horizrailenabled: false,
});