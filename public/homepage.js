var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

$(document).ready(function () {
    $('.grid-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        infinite: true,
        speed: 300,
        arrows: true,
        swipe: true,
        rows: 2, /* Menampilkan dua baris */
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});


// Navbar Berubah Warna Jangan di utak atik kina Error Navbar nya ku sabit nyawa

jQuery(function ($) {
    var $navbar = $('.header');
    var scrollDistance = 700; // Ganti nilai ini dengan jarak scroll yang Anda inginkan (dalam piksel)

    $(window).scroll(function (event) {
        var $current = $(this).scrollTop();
        if ($current > scrollDistance) {
            $navbar.addClass('navbar-color');
        } else {
            $navbar.removeClass('navbar-color');
        }
    });
});




jQuery(function ($) {
    var $navbar = $('.header');
    var scrollDistance = 2000; // Ganti nilai ini dengan jarak scroll yang Anda inginkan (dalam piksel)

    $(window).scroll(function (event) {
        var $current = $(this).scrollTop();
        if ($current > scrollDistance) {
            $navbar.addClass('navbar-color-part2');
        } else {
            $navbar.removeClass('navbar-color-part2');
        }
    });
});

var swiper = new Swiper(".my-swiper-container", {
    slidesPerView: 'auto',
    spaceBetween: 10,
    on: {
        slideChange: function () {
            document.querySelectorAll('.swiper-slide').forEach(function (slide, index) {
                slide.querySelector('.current-page').textContent = swiper.activeIndex + 1;
                slide.querySelector('.total-pages').textContent = swiper.slides.length;
            });
        }
    }
});

// Set initial pagination numbers
document.querySelectorAll('.swiper-slide').forEach(function (slide, index) {
    slide.querySelector('.current-page').textContent = swiper.activeIndex + 1;
    slide.querySelector('.total-pages').textContent = swiper.slides.length;
});