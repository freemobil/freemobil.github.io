"use strict";

// =================================================================
// Template Name: Affan - PWA Mobile HTML Template
// Template Author: Designing World
// Template Author URL: https://themeforest.net/user/designing-world
// =================================================================

// ============================================
// 1.0 Template Features Code
//      1.1 Setting Button Trigger
//      1.2 Password Visibility
//      1.3 Prevent Default 'a' Click
// 2.0 Third Party Plugins Activation
//      2.1 Dropdown Menu
//      2.2 Tiny Slider
//      2.3 Magic Grid
//      2.4 Image Gallery
//      2.5 Countdown
//      2.6 Counter Up
//      2.7 Range Slider
//      2.8 Data Table
// 3.0 Bootstrap Toast & Tooltips Activation
// 4.0 Miscellaneous Features Code
// 5.0 Preloader Activation
// ============================================

// ====================================
// Chapter 1.0: Template Features Code
// ====================================

// 1.1 => Setting Button Trigger

var settingButton, settingCard, settingOverlay, settingCardClose;
settingButton = document.getElementById("settingTriggerBtn");
settingCard = document.getElementById("settingCard");
settingOverlay = document.getElementById("setting-popup-overlay");
settingCardClose = document.getElementById("settingCardClose");

if (settingButton) {
    settingButton.addEventListener("click", function () {
        settingCard.classList.toggle("active");
        settingOverlay.classList.toggle("active");
    });
}

if (settingCardClose) {
    settingCardClose.addEventListener("click", function () {
        settingCard.classList.remove("active");
        settingOverlay.classList.remove("active");
    });
}

// 1.2 => Password Visibility

var passWord = document.getElementById("password-visibility");

if (passWord) {
    passWord.addEventListener('click', passwordFunction);
}

function passwordFunction() {
    var passInput = document.getElementById("psw-input");
    passWord.classList.toggle("active");

    if (passInput.type === "password") {
        passInput.type = "text";
    } else {
        passInput.type = "password";
    }
}

// 1.3 => Prevent Default 'a' Click

var aisEmpty = document.querySelectorAll('a[href="#"]');

if (aisEmpty.length > 0) {
    for (var i = 0; i < aisEmpty.length; i++) {
        aisEmpty[i].addEventListener("click", function (event) {
            event.preventDefault();
        });
    }
}

// ============================================
// Chapter 2.0: Third Party Plugins Activation
// ============================================

// 2.1.0 => Dropdown Menu (This code is dependent on [slideToggle.min.js] plugin).

var dropdownTarget = document.querySelectorAll(".sidenav-nav li ul");

if (dropdownTarget.length > 0) {
    for (var i = 0; i < dropdownTarget.length; i++) {
        var classTarget = dropdownTarget[i].previousElementSibling;
        classTarget.classList.add("nav-url");
    }

    var navUrl = document.querySelectorAll(".nav-url");
    for (var i = 0; i < navUrl.length; i++) {
        navUrl[i].insertAdjacentHTML("beforeend", "<span class='dropdown-icon'><i class='bi bi-chevron-down'></i></span>");
        navUrl[i].addEventListener("click", function () {
            this.classList.toggle("dd-open");
        });
    }

    var sidenavNav = document.querySelector(".sidenav-nav");
    sidenavNav.addEventListener("click", function (e) {
        if (e.target.classList.contains("nav-url")) {
            var nextTarget = e.target.nextElementSibling;
            slideToggle(nextTarget, 400);
        }
    });
}

// 2.2.1 => Tiny Slider One (This code is dependent on [tiny-slider.js] plugin).

if (document.querySelectorAll('.tiny-slider-one-wrapper').length > 0) {
    var slider = tns({
        container: ".tiny-slider-one",
        items: 1,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 1000,
        mouseDrag: true,
        controlsText: [('<i class="bi bi-chevron-left"></i>'), ('<i class="bi bi-chevron-right"></i>')]
    });
}

// 2.2.2 => Tiny Slider Two (This code is dependent on [tiny-slider.js] plugin).

if (document.querySelectorAll('.tiny-slider-two-wrapper').length > 0) {
    var tinySliderTwo = tns({
        container: '.tiny-slider-two',
        items: 1,
        slideBy: 'page',
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayButtonOutput: false,
        speed: 1000,
        mouseDrag: true,
        controls: false,
        nav: true
    });

    var tns3dots, dotLength, i;
    tns3dots = document.querySelectorAll(".tiny-slider-two-wrapper .tns-nav > button");
    dotLength = tns3dots.length;
    document.getElementById("totaltnsDotsCount").innerHTML = dotLength;

    for (i = 0; i < tns3dots.length; i++) {
        tns3dots[i].innerHTML = i + 1;
    }
}

// 2.1.3 => Tiny Slider Three (This code is dependent on [tiny-slider.js] plugin).

if (document.querySelectorAll('.tiny-slider-three-wrapper').length > 0) {
    var tinySliderThree = tns({
        container: '.tiny-slider-three',
        items: 1,
        gutter: 10,
        center: true,
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 1000,
        mouseDrag: true,
        controls: false,
        nav: false,
        edgePadding: 40
    });
}

// 2.2.4 => Testimonial Slides One (This code is dependent on [tiny-slider.js] plugin).

if (document.querySelectorAll(".testimonial-slide-one-wrapper").length > 0) {
    var testimonialSlide1 = tns({
        container: ".testimonial-slide",
        items: 1,
        gutter: 10,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 800,
        mouseDrag: true,
        controls: false,
        nav: true
    });
}

// 2.2.5 => Testimonial Slides Two (This code is dependent on [tiny-slider.js] plugin).

if (document.querySelectorAll(".testimonial-slide-two-wrapper").length > 0) {
    var testimonialSlide2 = tns({
        container: ".testimonial-slide2",
        items: 2,
        center: true,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 800,
        mouseDrag: true,
        controls: true,
        nav: false,
        controlsText: [('<i class="bi bi-chevron-left"></i>'), ('<i class="bi bi-chevron-right"></i>')]
    });
}

// 2.2.6 => Testimonial Slides Three (This code is dependent on [tiny-slider.js] plugin).

if (document.querySelectorAll(".testimonial-slide-three-wrapper").length > 0) {
    var testimonialSlide2 = tns({
        container: ".testimonial-slide3",
        items: 1,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 800,
        mouseDrag: true,
        controls: false,
        nav: true,
        navPosition: "bottom"
    });
}

// 2.2.7 => Partner Slides One (This code is dependent on [tiny-slider.js] plugin).

if (document.querySelectorAll(".partner-logo-slide-wrapper").length > 0) {
    var partnerslides1 = tns({
        container: ".partner-slide",
        items: 3,
        gutter: 12,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 1000,
        mouseDrag: true,
        controls: false,
        nav: true,
        navPosition: "bottom"
    });
}

// 2.2.8 => Partner Slides Two (This code is dependent on [tiny-slider.js] plugin).

if (document.querySelectorAll(".partner-logo-slide-wrapper-2").length > 0) {
    var partnerslides2 = tns({
        container: ".partner-slide2",
        items: 3,
        gutter: 12,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 1000,
        mouseDrag: true,
        controls: false,
        nav: true,
        navPosition: "bottom"
    });
}

// 2.2.9 => Image Gallery Slides (This code is dependent on [tiny-slider.js] plugin).

if (document.querySelectorAll(".image-gallery-slides-wrapper").length > 0) {
    var partnerslides2 = tns({
        container: ".image-gallery-carousel",
        items: 3,
        gutter: 16,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 750,
        mouseDrag: true,
        controls: false,
        nav: false
    });
}

// 2.2.10 => Product Gallery Slides (This code is dependent on [tiny-slider.js] plugin).

if (document.querySelectorAll(".product-gallery-wrapper").length > 0) {
    var productGallery = tns({
        container: ".product-gallery",
        items: 1,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 750,
        mouseDrag: true,
        controls: false,
        nav: false
    });
}

// 2.2.11 => Chat Users Slides (This code is dependent on [tiny-slider.js] plugin).

if (document.querySelectorAll(".chat-user-status-slides-wrapper").length > 0) {
    var chatUserSlides = tns({
        container: ".chat-user-status-slides",
        items: 5,
        gutter: 8,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        autoplayTimeout: 5000,
        speed: 750,
        mouseDrag: true,
        controls: false,
        nav: false,
        responsive: {
            480: {
                items: 7
            },
            576: {
                items: 7
            },
            768: {
                items: 8
            },
            992: {
                items: 10
            },
            1200: {
                items: 10
            }
        }
    });
}

// 2.3 => Magic Grid (This code is dependent on [magic-grid.min.js] plugin).

var magicGridContainer = document.querySelector("#filterContainer");

if (magicGridContainer) {
    let magicGrid = new MagicGrid({
        container: '#filterContainer',
        animate: true,
        gutter: 16,
        static: true,
        useMin: true
    });

    magicGrid.listen();
}

// 2.4.1 => Image Gallery (This code is dependent on [baguetteBox.min.js] plugin).

if (document.querySelectorAll(".gallery-img").length > 0) {
    window.addEventListener("load", function () {
        baguetteBox.run(".gallery-img", {
            captions: false,
            fullScreen: false,
            animation: "slideIn", // Also available 'fadeIn' or 'false' options
            overlayBackgroundColor: "rgba(15,7,15,0.7)"
        });
    });
}

// 2.4.2 => Image Gallery (This code is dependent on [baguetteBox.min.js] plugin).

if (document.querySelectorAll(".product-gallery").length > 0) {
    window.addEventListener("load", function () {
        baguetteBox.run(".product-gallery", {
            captions: false,
            fullScreen: false,
            animation: "slideIn", // Also available 'fadeIn' or 'false' options
            overlayBackgroundColor: "rgba(15,7,15,0.7)"
        });
    });
}

// 2.5.1 => Countdown One (This code is dependent on [countdown.js] plugin).

var countdown1 = document.getElementById("countdown1");

if (countdown1) {
    new countdown({
        target: '#countdown1',
        dayWord: ' Days',
        hourWord: ' Hours',
        minWord: ' Mins',
        secWord: ' Secs'
    });
}

// 2.5.2 => Countdown Two (This code is dependent on [countdown.js] plugin).

var countdown2 = document.getElementById("countdown2");

if (countdown2) {
    new countdown({
        target: '#countdown2',
        dayWord: ' Days',
        hourWord: ' Hours',
        minWord: ' Mins',
        secWord: ' Secs'
    });
}

// 2.5.3 => Countdown Three (This code is dependent on [countdown.js] plugin).

var countdown3 = document.getElementById("countdown3");

if (countdown3) {
    new countdown({
        target: '#countdown3',
        dayWord: ' Days',
        hourWord: ' Hours',
        minWord: ' Mins',
        secWord: ' Secs'
    });
}

// 2.6 => Counter Up (This code is dependent on [index.js] plugin).

if (document.querySelectorAll('.counter').length > 0) {
    const counterUp = window.counterUp.default;

    const callback = entries => {
        entries.forEach(entry => {
            const counterElement = entry.target
            if (entry.isIntersecting && !counterElement.classList.contains('is-visible')) {
                counterUp(counterElement, {
                    duration: 2000,
                    delay: 20
                });
                counterElement.classList.add('is-visible');
            }
        });
    }

    const IO = new IntersectionObserver(callback, {
        threshold: 1
    });
    const counterUpClass = document.querySelectorAll('.counter');
    for (var i = 0; i < counterUpClass.length; i++) {
        IO.observe(counterUpClass[i]);
    }
}

// 2.7.1 => ion Range Slider One (This code is dependent on [rangeslider.min.js] plugin).

var ionRangeSlider1 = document.getElementById("ionRangeSlider1");

if (ionRangeSlider1) {
    ionRangeSlider(ionRangeSlider1, {});
}

// 2.7.2 => ion Range Slider Two (This code is dependent on [rangeslider.min.js] plugin).

var ionRangeSlider2 = document.getElementById("ionRangeSlider2");

if (ionRangeSlider2) {
    ionRangeSlider(ionRangeSlider2, {});
}

// 2.8 => Data Table (This code is dependent on [vanilla-dataTables.min.js] plugin).

var dataTable1 = document.getElementById("dataTable");

if (dataTable1) {
    var dataTable = new DataTable(dataTable1, {
        perPage: 10,
        perPageSelect: [10, 20, 30, 40, 50],
        searchable: true,
        sortable: true,
        fixedHeight: false,
        prevText: '<i class="bi bi-arrow-left-short"></i>',
        nextText: '<i class="bi bi-arrow-right-short"></i>',
        labels: {
            placeholder: "Search",
            perPage: "{select}",
            noRows: "No data!",
            info: "{start} to {end} entries",
        }
    });
}

// =================================================
// Chapter 3.0 Bootstrap Toast & Tooltips Activation
// =================================================

// Tooltip Activation

var affanTooltip = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = affanTooltip.map(function (tooltip) {
    return new bootstrap.Tooltip(tooltip);
});

// Toast Activation

var affanToast = [].slice.call(document.querySelectorAll('.toast'));
var toastList = affanToast.map(function (toast) {
    return new bootstrap.Toast(toast);
});
toastList.forEach(toast => toast.show());

// ===========================
// Chapter 4.0 Miscellaneous
// ==========================

// Toast Showing Function

var toastBtn = document.getElementById("toast-showing-btn");

if (toastBtn) {
    toastBtn.addEventListener('click', function () {
        var affanToast = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = affanToast.map(function (toast) {
            return new bootstrap.Toast(toast);
        });
        toastList.forEach(toast => toast.show());
    });
}

// Toast Animation: This function creates the line animation effect on a toast.

window.onload = function toastAnimation() {
    var x, i, toastDuration, toastAnimDuration, y, z;
    x = document.querySelectorAll(".toast-autohide");

    for (i = 0; i < x.length; i++) {
        x[i].insertAdjacentHTML('beforeend', '<span class="toast-autohide-animation"></span>');
        toastDuration = x[i].getAttribute("data-bs-delay");
        toastAnimDuration = toastDuration + "ms";
    }

    y = document.querySelectorAll(".toast-autohide-animation");
    for (z = 0; z < y.length; z++) {
        y[z].style.animationDuration = toastAnimDuration;
    }
}

// Add "form-control-clicked" class, when the user clicks the input element.

var formcontrolInput = document.querySelectorAll(".form-control, .form-select");

for (var i = 0; i < formcontrolInput.length; i++) {
    formcontrolInput[i].addEventListener("click", function () {
        this.classList.add("form-control-clicked");
    });
}

// When the user clicks on the element, the active class is added to understand the active status.

var activeEffect = document.querySelectorAll(".active-effect");

for (var i = 0; i < activeEffect.length; i++) {
    activeEffect[i].addEventListener("click", function () {
        var el = activeEffect[0];
        while (el) {
            if (el.tagName === "DIV") {
                el.classList.remove("active");
            }
            el = el.nextSibling;
        }
        this.classList.add("active");
    });
}

// Image gallery items favorite icon click function.

var favIcon = document.querySelectorAll(".single-gallery-item .fav-icon");

for (var i = 0; i < favIcon.length; i++) {
    favIcon[i].addEventListener("click", function () {
        this.classList.toggle("active");
    });
}

// Chat page calling button functions.

var videoButton, videoPopup, videoDecline, chatWrapper, callingButton, callingPopup, callDecline;
videoButton = document.getElementById("videoCallingButton");
videoPopup = document.getElementById("videoCallingPopup");
videoDecline = document.getElementById("videoCallDecline");
chatWrapper = document.getElementById("chat-wrapper");
callingButton = document.getElementById("callingButton");
callingPopup = document.getElementById("callingPopup");
callDecline = document.getElementById("callDecline");

if (videoButton) {
    videoButton.addEventListener("click", function () {
        videoPopup.classList.add("screen-active");
        chatWrapper.classList.add("calling-screen-active");
    });
}

if (videoDecline) {
    videoDecline.addEventListener("click", function () {
        videoPopup.classList.remove("screen-active");
        chatWrapper.classList.remove("calling-screen-active");
    });
}

if (callingButton) {
    callingButton.addEventListener("click", function () {
        callingPopup.classList.add("screen-active");
        chatWrapper.classList.add("calling-screen-active");
    });
}

if (callDecline) {
    callDecline.addEventListener("click", function () {
        callingPopup.classList.remove("screen-active");
        chatWrapper.classList.remove("calling-screen-active");
    });
}

// Offline/Online Detection Demo Button Code (Please remove this code, when your website is ready to go live.)

var offlineBtn = document.querySelectorAll(".offline-detection");
var onlineBtn = document.querySelectorAll(".online-detection");

if (offlineBtn.length > 0 && onlineBtn.length > 0) {
    var alertShowingId = document.getElementById("internetStatus");

    offlineBtn[0].addEventListener("click", function(){
        alertShowingId.style.display = "block";
        alertShowingId.style.backgroundColor = "#ea4c62";
        alertShowingId.innerText = "Oops! No internet connection.";
    
        setTimeout(function() {
            alertShowingId.style.display = "none";
        }, 5000);
    });
    
    onlineBtn[0].addEventListener("click", function(){
        alertShowingId.style.display = "block";
        alertShowingId.style.backgroundColor = "#00b894";
        alertShowingId.innerText = "Your internet connection is back.";
    
        setTimeout(function() {
            alertShowingId.style.display = "none";
        }, 5000);
    });
}

// ======================
// Chapter 5.0 Preloader
// ======================

var preloader = document.getElementById("preloader");

if (preloader) {
    window.addEventListener("load", function () {
        var fadeOut = setInterval(function () {
            if (!preloader.style.opacity) {
                preloader.style.opacity = 1;
            }
            if (preloader.style.opacity > 0) {
                preloader.style.opacity -= 0.1;
            } else {
                clearInterval(fadeOut);
                preloader.remove();
            }
        }, 20);
    });
}