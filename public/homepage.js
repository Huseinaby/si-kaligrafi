  var swiper = new Swiper(".mySwiper", {
      slidesPerView: 4,
      centeredSlides: false,
      spaceBetween: 40,
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

    $(document).ready(function(){
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

  document.addEventListener('DOMContentLoaded', () => {
    const cardWrapper = document.querySelector('.card-wrapper');
    const cards = document.querySelectorAll('.card');
    let index = 0;

    setInterval(() => {
        index = (index + 1) % cards.length;
        cardWrapper.style.transform = `translateX(-${index * 100}%)`;
    }, 3000);
});