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


//  Carousel Testimoni
(function () {
    const carousel = document.querySelector('.custom-carousel-testimoni');
    const nextBtn = document.getElementById('customNextBtnTestimoni');
    const prevBtn = document.getElementById('customPrevBtnTestimoni');
    let currentIndex = 0;

    const updateCarousel = () => {
        const items = document.querySelectorAll('.custom-carousel-testimoni > div');
        const isMobile = window.innerWidth < 1279;
        const maxIndex = isMobile ? items.length - 1 : Math.ceil(items.length / 2) - 1;
        const translateValue = isMobile ? -currentIndex * 100 : -currentIndex * (100 / 2);

        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }

        carousel.style.transform = `translateX(${translateValue}%)`;
    };

    nextBtn.addEventListener('click', () => {
        const items = document.querySelectorAll('.custom-carousel-testimoni > div');
        const isMobile = window.innerWidth < 1279;
        const maxIndex = isMobile ? items.length - 1 : Math.ceil(items.length / 2) - 1;
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateCarousel();
        }
    });

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    });

    window.addEventListener('resize', updateCarousel);
    updateCarousel();
})();
