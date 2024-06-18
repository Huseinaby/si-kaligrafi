var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
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