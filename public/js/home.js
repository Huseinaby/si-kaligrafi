 
 //  JS Navbar
 
 const menuButton = document.querySelector('button[aria-controls="mobile-menu"]');
 const menu = document.getElementById('mobile-menu');
 const navbar = document.getElementById('navbar');

 menuButton.addEventListener('click', () => {
     const expanded = menuButton.getAttribute('aria-expanded') === 'true' || false;
     menuButton.setAttribute('aria-expanded', !expanded);
     menu.classList.toggle('hidden');
 });

 window.addEventListener('scroll', () => {
     if (window.scrollY > 50) {
         navbar.classList.add('bg-[#003C43]', 'shadow-md');
         navbar.classList.remove('bg-transparent');
     } else {
         navbar.classList.add('bg-transparent');
         navbar.classList.remove('bg-[#003C43]', 'shadow-md');
     }
 });


 //Layanan

 document.addEventListener('DOMContentLoaded', function () {
     const carouselInner = document.querySelector('.carousel-inner');
     const items = document.querySelectorAll('.carousel-item');
     const totalItems = items.length;
     let currentIndex = 1;

     function updateCarousel() {
         items.forEach((item, index) => {
             item.classList.remove('active');
         });
         items[currentIndex].classList.add('active');
         const isMobile = window.innerWidth < 769;
         const isLargeScreen = window.innerWidth >= 1024;
         const offset = isMobile
             ? -currentIndex * 100
             : isLargeScreen
                 ? -(currentIndex - 1) * 100 / 3
                 : -(currentIndex - 1) * 100 / 3;
         carouselInner.style.transform = `translateX(${offset}%)`;
     }

     function prev() {
         currentIndex = (currentIndex - 1 + totalItems) % totalItems;
         updateCarousel();
     }

     function next() {
         currentIndex = (currentIndex + 1) % totalItems;
         updateCarousel();
     }

     document.getElementById('prevBtnLayanan').addEventListener('click', prev);
     document.getElementById('nextBtnLayanan').addEventListener('click', next);

     window.addEventListener('resize', updateCarousel);


     updateCarousel();


     window.prev = prev;
     window.next = next;
 });



// js Testimoni

  document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi Carousel 1
    new Splide('.splide1', {
      type   : 'loop',
      perPage: 2,
      gap    : '1rem',
      breakpoints: {
        640: {
          perPage: 1,
        },
        768: {
          perPage: 2,
        },
      },
    }).mount();

    
  });






// js bahan

var splide = new Splide( '.splide', {
    type   : 'loop',
    perPage: 5, // Menampilkan 5 slide sekaligus
    breakpoints: {
      1536: {
        perPage: 4, // 4 slide untuk layar besar (1536px ke atas)
      },
      1280: {
        perPage: 3, // 3 slide untuk layar sedang (1280px ke atas)
      },
      1023: {
        perPage: 2, // 2 slide untuk layar kecil (1024px ke atas)
      },
      767: {
        perPage: 1, // 1 slide untuk layar sangat kecil (768px ke atas)
        gap: '1rem', // Jarak antar slide lebih kecil untuk layar sangat kecil
        padding: {
          left : '0.5rem',
          right: '0.5rem',
        },
      },
    },
    focus  : 'center',
    gap: '2rem', // Jarak antar slide
    padding: {
      right: '1rem',
    }, // Memberikan padding di sisi kiri dan kanan
  } );
  splide.mount();


