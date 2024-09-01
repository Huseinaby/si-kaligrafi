 
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




// js Testimoni

  document.addEventListener('DOMContentLoaded', function () {
    
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

  
  

  document.addEventListener('DOMContentLoaded', function () {
  // Inisialisasi Splide layanan
    
    new Splide('.splide-layanan', {
      type: 'loop',
      perPage: 3, 
      perMove: 1, 
      breakpoints: {
        1023: {
          perPage: 2, 
        },
        640: {
          perPage: 1, 
        },
      },
      focus: 'center',
      gap: '2rem', 
      padding: {
        right: '1rem',
        left: '1rem',
      },
    }).mount();
  
  // Inisialisasi Splide  bahan

    new Splide('.splide-bahan', {
      type: 'loop',
      perPage: 5, 
      breakpoints: {
        1536: {
          perPage: 4, 
        },
        1280: {
          perPage: 3, 
        },
        1023: {
          perPage: 2, 
        },
        767: {
          perPage: 1, 
          gap: '1rem', 
          padding: {
            left: '0.5rem',
            right: '0.5rem',
          },
        },
      },
      focus: 'center',
      gap: '2rem', 
      padding: {
        right: '1rem',
      },
    }).mount();
  });

  
// Typing

const texts = ["Selamat datang di web!", "KALIGRAFI"];
const textElement = document.getElementById('typingText');
let textIndex = 0;
let charIndex = 0;
const typingSpeed = 100; // Kecepatan mengetik
const erasingSpeed = 100; // Kecepatan menghapus
const delayBetweenTexts = 1000; // Jeda antar teks (dalam milidetik)
const delayAfterLastText = 7000; // Jeda setelah kalimat terakhir sebelum mengulang (dalam milidetik)

function typeEffect() {
    if (charIndex < texts[textIndex].length) {
        textElement.innerHTML += texts[textIndex].charAt(charIndex);
        charIndex++;
        setTimeout(typeEffect, typingSpeed);
    } else {
        if (textIndex === texts.length - 1) {
            setTimeout(eraseEffect, delayAfterLastText); // Jeda tambahan setelah kalimat terakhir
        } else {
            setTimeout(eraseEffect, delayBetweenTexts);
        }
    }
}

function eraseEffect() {
    if (charIndex > 0) {
        textElement.innerHTML = texts[textIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(eraseEffect, erasingSpeed);
    } else {
        textIndex = (textIndex + 1) % texts.length; // Pindah ke teks berikutnya
        setTimeout(typeEffect, typingSpeed);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    typeEffect(); // Mulai efek mengetik saat halaman dimuat
});


  

