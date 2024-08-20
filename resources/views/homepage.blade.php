<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    {{-- Config tailwind --}}
    @vite('resources/css/app.css')

    <!-- Pustaka Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Link CSS Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    {{-- css home --}}
    <link rel="stylesheet" href="css/homepage.css">
    

</head>


<body>

<!-- Navbar -->
<nav id="navbar" class="bg-transparent p-4 fixed top-0 left-0 right-0 z-20 transition duration-300">
    <div class="max-w-full mx-auto px-2 lg:px-2">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center">
                <img class="h-14 w-auto" src="../img/kaligrafi2.png" alt="Workflow">
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center lg:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 bg-[#003C43] focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed. -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <!-- Icon when menu is open. -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Navbar Biasa -->
            <div class="hidden lg:block lg:ml-6">
                <div class="flex space-x-4">
                    <a href="#layanan"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Layanan</a>
                    <a href="#tentang"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Tentang</a>
                    <a href="#bahan"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Bahan</a>
                    <a href="#ornamen"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Ornamen</a>
                    <a href="portofolio"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Portofolio</a>
                    <a href="#galeri"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Galeri</a>
                    <a href="#testimoni"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Testimoni</a>
                    <button
                        class="bg-yellow-300 hover:bg-yellow-400 block px-4 py-2 rounded-lg font-medium text-xl"><a
                            href="login">Login</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar Mobile -->
    <div class="hidden lg:hidden bg-[#003C43]" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#layanan"
                class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Layanan</a>
            <a href="#tentang"
                class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Tentang</a>
            <a href="#bahan"
                class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Bahan</a>
            <a href="#ornamen"
                class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Ornamen</a>
            <a href="portofolio"
                class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Portofolio</a>
            <a href="#galeri"
                class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Galeri</a>
            <a href="#testimoni"
                class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Testimoni</a>
            <button class="bg-yellow-300 hover:bg-yellow-400 block px-4 py-2 rounded-lg text-base font-medium"><a
                    href="login">Login</a></button>
        </div>
    </div>
</nav>

   

<!-- Title -->
    <div class="relative bg-center bg-cover h-[500px] sm:h-[600px] md:h-[800px] lg:h-[1000px] -mt-16 "
    style="background-image: url('../img/kali.png');">
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    
    <div class="relative z-10 h-full flex flex-col justify-center text-left px-6 lg:px-28 py-10 items-center ">
        <div class=" px-12 mt-40 container sm:px-26 lg:contain-none lg:px-0 lg:-ml-10 xl:px-16 lg:mt-32 ">
            <h2 class="text-3xl sm:text-2xl md:text-3xl lg:text-4xl font-semibold text-white  mb-4 xl:py-14 xl:text-6xl">
                KALIGRAFI
            </h2>
            <div class="  rounded-lg max-w-lg w-full mx-auto sm:mx-0">
                <p class="text-white text-justify font-semibold">
                    Percantik masjid Anda dengan sentuhan seni kaligrafi islami dari kami. Rasakan keindahan yang membawa kedamaian dan keberkahan. Kami menghadirkan kaligrafi dengan desain yang mempesona.
                </p>
            </div>
            <button
                class="flex items-center w-48 bg-yellow-300 hover:bg-yellow-400 text-green-900 font-semibold py-2 px-4 rounded-full shadow-lg mt-6 transition-transform duration-300 ease-in-out transform hover:scale-110">
                <svg class="w-6 h-6 mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                        d="M6.62 10.79a15.978 15.978 0 006.79 6.79l2.2-2.2a1.003 1.003 0 011.08-.21c1.12.45 2.33.69 3.58.69.55 0 1 .45 1 1v3.5c0 .55-.45 1-1 1C10.3 22 2 13.7 2 3.5 2 2.95 2.45 2.5 3 2.5H6.5c.55 0 1 .45 1 1 0 1.25.24 2.46.69 3.58.1.23.04.5-.21 1.08l-2.2 2.2z" />
                </svg>
                <a href="https://wa.me/6285845510008?text=Halo%20Mas%20Bro!">Hubungi kami</a>
            </button>
        </div>
    </div>
</div>

<section id="tentang"> </section>
       <!-- Container -->
      <div class="container mx-auto px-14 lg:px-20 mt-32  ">

<!-- Tentang Kami -->

        <div class="flex flex-col lg:flex-row items-center lg:space-x-10 mb-16 ">
            <div class="lg:w-1/2 lg:flex lg:justify-center">
                <img src="../img/Trenggalek Jatim.jpg" alt="Peta"
                    class="w-full max-w-xs rounded-lg cursor-pointer sm:max-w-[650px] lg:max-w-xl xl:max-w-3xl mx-auto">
            </div>
            <div class="lg:w-1/2 lg:pl-10 mt-8 lg:mt-0">
                <div class="max-w-[650px] mx-auto lg:mx-0 2xl:-mt-[110px]  lg:mt-[130px] xl:-mt-1 ">
                    <h1 class="text-3xl font-bold mb-8 xl:mb-4 2xl:mb-8">Tentang Kami</h1>
                    <p class="text-justify bg-slate-200 rounded-lg p-4 lg:p-8  font-semibold 2xl:w-[624px] xl:w-[500px] ">
                        "Kami berdedikasi menghadirkan kaligrafi yang memadukan keindahan tulisan Arab dengan makna
                        spiritual mendalam. Dengan keahlian tangan terampil dan rasa seni tinggi, kami menciptakan
                        dekorasi kaligrafi yang menambah nuansa sakral dan estetis pada interior serta eksterior masjid.
                        Hasil karya kami memperindah ruang dengan sentuhan artistik yang menginspirasi dan mempesona."
                    </p>
                </div>
            </div>
        </div>
   
 <!-- Kualitas Kami -->

        <div class=" mb-16 mt-32">
            <h2 class="text-3xl font-bold">Kualitas Kami</h2>
            <div class="mt-1 w-10 h-1 bg-black "></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2  xl:grid-cols-4 gap-6 mb-28 xl:mb-48 ">
            <div class="bg-slate-200 p-6 rounded-lg shadow-xl flex flex-col items-center ">
                <div class="text-4xl mb-4">
                    <i class="fas fa-trophy"></i> 
                </div>
                <h2 class="text-xl font-semibold mb-2">Professional</h2>
                <p class="text-gray-600 text-center ">Kami berkomitmen memberikan layanan kaligrafi masjid dengan standar
                    profesional yang tinggi di setiap proyek dikerjakan.</p>
            </div>
            <div class="bg-slate-200 p-6 rounded-lg shadow-xl flex flex-col items-center">
                <div class="text-4xl mb-4">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h2 class="text-xl font-semibold mb-2">Berpengalaman</h2>
                <p class="text-gray-600 text-center">Dengan pengalaman bertahun-tahun dalam seni kaligrafi masjid, kami memiliki
                    keahlian untuk menciptakan karya yang memukau</p>
            </div>
            <div class="bg-slate-200 p-6 rounded-lg shadow-xl flex flex-col items-center">
                <div class="text-4xl mb-4">
                    <i class="fas fa-user-cog"></i>
                </div>
                <h2 class="text-xl font-semibold mb-2">Tenaga Ahli</h2>
                <p class="text-gray-600 text-center">Didukung oleh tenaga ahli yang terlatih dan berkompeten, kami menjamin
                    setiap detail kaligrafi masjid Anda.</p>
            </div>
            <div class="bg-slate-200 p-6 rounded-lg shadow-xl flex flex-col items-center">
                <div class="text-4xl mb-4">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h2 class="text-xl font-semibold mb-2">Terpercaya</h2>
                <p class="text-gray-600 text-center">Kami telah dipercaya oleh banyak masjid untuk menghadirkan kaligrafi yang
                    berkualitas tinggi, sebagai prioritas utama.</p>
            </div>
          
        </div> 
       
    </div>
    

<!-- Layanan -->

<section id="layanan" class="mb-72"> </section>
    <div class="bg-slate-900 h-[620px]  md:h-[650px] lg:h-[750px]  xl:h-[800px]">

        <div class="container mx-auto px-6 lg:px-20 mt-32 py-10">
            <h2 class="text-3xl font-bold text-white px-9 xl:px-3">
                Layanan
            </h2>
            <div class="mt-1 w-10 h-1 bg-white ml-10 xl:ml-3"></div>
        </div>

        <div class="px-10 h-96" >
            <div class="w-full max-w-5xl mx-auto  ">
                <div class="carousel  ">
                    <div class="carousel-inner  mt-4  ">
                        <div class="carousel-item  ">
                            <img class="cursor-pointer " src="../img/m2.png" alt="Kubah">
                            <span class="">Kubah</span>
                        </div>
                        <div class="carousel-item active">
                            <img class="cursor-pointer" src="../img/m3.png" alt="Dinding">
                            <span >Dinding</span>
                        </div>
                        <div class="carousel-item">
                            <img class="cursor-pointer"  src="../img/m2.png" alt="Mihrab">
                            <span>Mihrab</span>
                        </div>
                        <div class="carousel-item">
                            <img class="cursor-pointer" src="../img/m3.png" alt="Kubah">
                            <span>Kubah</span>
                        </div>
                        <div class="carousel-item">
                            <img class="cursor-pointer" src="../img/m2.png" alt="Dinding">
                            <span>Dinding</span>
                        </div>
                        <div class="carousel-item">
                            <img class="cursor-pointer" src="../img/m3.png" alt="Mihrab">
                            <span>Mihrab</span>
                        </div>
                    </div>
                    <div class="carousel-button left" id="prevBtnLayanan">&#10094;</div>
                    <div class="carousel-button right" id="nextBtnLayanan">&#10095;</div>

                </div>
            </div>
        </div>
    </div>



    

  



<!-- Bahan -->


<section id="bahan" class="mb-32" > </section>

    <div class="">

        <div class="mt-20 text-center">
            <h2 class="text-3xl font-bold">
                Bahan
            </h2>
            <div class="mt-2 mx-auto w-16 h-1 bg-black mb-8"></div>
        </div>
<div class="container mx-auto px-14 lg:px-20 mt-32 ">
        <div class="container mx-auto px-0  ">
            <div class="overflow-x-auto scrollbar-hide max-w-ful">
                <div class="flex space-x-4">
                    <div class="flex-none bg-slate-200 rounded-lg shadow-lg overflow-hidden w-64">
                        <img src="../img/m3.png" alt="Image" class="w-full h-64 lg:h-80 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold mb-2 text-center">ACP</h2>
                            <div class="card-content">
                                <p class="text-gray-700 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed ut
                                    urna velit. Donec commodo arcu sed odio laoreet, quis dignissim mi bibendum. Integer
                                    id libero ac risus aliquam fermentum. Mauris vel felis sit amet purus fermentum
                                    pulvinar. lorem</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none bg-slate-200 rounded-lg shadow-lg overflow-hidden w-64">
                        <img src="../img/m3.png" alt="Image" class="w-full h-64 lg:h-80 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold mb-2 text-center">ACP</h2>
                            <div class="card-content">
                                <p class="text-gray-700 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed ut
                                    urna velit. Donec commodo arcu sed odio laoreet, quis dignissim mi bibendum. Integer
                                    id libero ac risus aliquam fermentum. Mauris vel felis sit amet purus fermentum
                                    pulvinar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none bg-slate-200 rounded-lg shadow-lg overflow-hidden w-64">
                        <img src="../img/m3.png" alt="Image" class="w-full  h-64 lg:h-80 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold mb-2 text-center">ACP</h2>
                            <div class="card-content">
                                <p class="text-gray-700 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed ut
                                    urna velit. Donec commodo arcu sed odio laoreet, quis dignissim mi bibendum. Integer
                                    id libero ac risus aliquam fermentum. Mauris vel felis sit amet purus fermentum
                                    pulvinar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none bg-slate-200 rounded-lg shadow-lg overflow-hidden w-64">
                        <img src="../img/m3.png" alt="Image" class="w-full h-64 lg:h-80 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold mb-2 text-center">ACP</h2>
                            <div class="card-content">
                                <p class="text-gray-700 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed ut
                                    urna velit. Donec commodo arcu sed odio laoreet, quis dignissim mi bibendum. Integer
                                    id libero ac risus aliquam fermentum. Mauris vel felis sit amet purus fermentum
                                    pulvinar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none bg-slate-200 rounded-lg shadow-lg overflow-hidden w-64">
                        <img src="../img/m3.png" alt="Image" class="w-full h-64 lg:h-80 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold mb-2 text-center">ACP</h2>
                            <div class="card-content">
                                <p class="text-gray-700 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed ut
                                    urna velit. Donec commodo arcu sed odio laoreet, quis dignissim mi bibendum. Integer
                                    id libero ac risus aliquam fermentum. Mauris vel felis sit amet purus fermentum
                                    pulvinar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none bg-slate-200 rounded-lg shadow-lg overflow-hidden w-64">
                        <img src="../img/m3.png" alt="Image" class="w-full h-64 lg:h-80 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold mb-2 text-center">ACP</h2>
                            <div class="card-content">
                                <p class="text-gray-700 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed ut
                                    urna velit. Donec commodo arcu sed odio laoreet, quis dignissim mi bibendum. Integer
                                    id libero ac risus aliquam fermentum. Mauris vel felis sit amet purus fermentum
                                    pulvinar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-none bg-slate-200 rounded-lg shadow-lg overflow-hidden w-64">
                        <img src="../img/m3.png" alt="Image" class="w-full h-64 lg:h-80 object-cover">
                        <div class="p-4">
                            <h2 class="text-xl font-bold mb-2 text-center">ACP</h2>
                            <div class="card-content">
                                <p class="text-gray-700 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Sed ut
                                    urna velit. Donec commodo arcu sed odio laoreet, quis dignissim mi bibendum. Integer
                                    id libero ac risus aliquam fermentum. Mauris vel felis sit amet purus fermentum
                                    pulvinar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    </div>


<!-- Ornamen -->
<section id="ornamen" class="mb-32" > </section>

    <div class="mt-20 text-center">
        <h2 class="text-3xl font-bold">
            Ornamen
        </h2>
        <div class="mt-2 mx-auto w-16 h-1 bg-black mb-8"></div>
    </div>

    <div class="container mx-auto p-10 cursor-pointer ">
        <div class="flex justify-center space-x-4 mb-4">
            <button class="filter-btn px-4 py-2 border bg-slate-200 rounded-lg hover:bg-slate-300"
                data-filter="all">Semua</button>
            <button class="filter-btn px-4 py-2 border bg-slate-200 rounded-lg hover:bg-slate-300"
                data-filter="kubah">Kubah</button>
            <button class="filter-btn px-4 py-2 border bg-slate-200 rounded-lg hover:bg-slate-300"
                data-filter="mihrab">Mihrab</button>
        </div>


        <div id="cards-container"
            class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 container mx-auto px-4 sm:px-6 lg:px-16 py-10 ">
        </div>

        <div class="flex justify-center ">
            <button id="prev-btn" class="px-4 py-2 border rounded-l" onclick="changePage('prev')">&lt;</button>
            <div id="pagination" class="flex space-x-1"></div>
            <button id="next-btn" class="px-4 py-2 border rounded-r" onclick="changePage('next')">&gt;</button>
        </div>
    </div>

    <!-- JavaSkrip Ornamen-->
    <script>
        //Data nya ornamen di dalam javaskrip
        const cardsData = [
            { src: '../img/m2.png', text: 'Bahan : ACP', category: 'kubah' },
            { src: '../img/m2.png', text: 'Bahan : Cat', category: 'mihrab' },
            { src: '../img/m2.png', text: 'Bahan : ACP', category: 'kubah' },
            { src: '../img/m2.png', text: 'Bahan : Bata', category: 'mihrab' },
            { src: '../img/m2.png', text: 'Bahan : ACP', category: 'kubah' },
            { src: '../img/m2.png', text: 'Bahan : Besi', category: 'mihrab' },
            { src: '../img/m2.png', text: 'Bahan : ACP', category: 'kubah' },
            { src: '../img/m2.png', text: 'Bahan : Kayu', category: 'mihrab' },
            { src: '../img/m2.png', text: 'Bahan : ACP', category: 'kubah' }
        ];
        const cardsPerPage = 6;
        let currentPage = 1;
        let currentFilter = 'all';

        function renderCards() {
            const cardsContainer = document.getElementById('cards-container');
            cardsContainer.innerHTML = '';

            const filteredCards = currentFilter === 'all' ? cardsData : cardsData.filter(card => card.category === currentFilter);
            const startIndex = (currentPage - 1) * cardsPerPage;
            const endIndex = startIndex + cardsPerPage;
            const cardsToShow = filteredCards.slice(startIndex, endIndex);

            cardsToShow.forEach(card => {
                //Tampilan nya di sini
                const cardElement = `
                    <div class="relative w-full overflow-hidden rounded-xl group z-0">
                        <img src="${card.src}" alt="Gambar" class="w-full rounded-xl">
                        <div class="absolute inset-0 flex items-end py-4 px-4 rounded-xl bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300">
                            <h2 class="text-lg text-white font-semibold shadow-inner">${card.text}</h2>
                        </div>
                    </div>
                `;
                cardsContainer.innerHTML += cardElement;
            });
        }

        function renderPagination() {
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = '';

            const filteredCards = currentFilter === 'all' ? cardsData : cardsData.filter(card => card.category === currentFilter);
            const totalPages = Math.ceil(filteredCards.length / cardsPerPage);

            for (let i = 1; i <= totalPages; i++) {
                const pageElement = `
                    <button class="px-4 py-2 border ${i === currentPage ? 'font-bold' : ''}" onclick="goToPage(${i})">${i}</button>
                `;
                paginationContainer.innerHTML += pageElement;
            }
        }

        function changePage(direction) {
            const filteredCards = currentFilter === 'all' ? cardsData : cardsData.filter(card => card.category === currentFilter);
            const totalPages = Math.ceil(filteredCards.length / cardsPerPage);
            if (direction === 'prev' && currentPage > 1) {
                currentPage--;
            } else if (direction === 'next' && currentPage < totalPages) {
                currentPage++;
            }
            renderCards();
            renderPagination();
        }

        function goToPage(page) {
            currentPage = page;
            renderCards();
            renderPagination();
        }

        function setFilter(filter) {
            currentFilter = filter;
            currentPage = 1; 
            renderCards();
            renderPagination();
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('font-bold'));
                    btn.classList.add('font-bold');
                    setFilter(btn.getAttribute('data-filter'));
                });
            });

            renderCards();
            renderPagination();
        });
    </script>





<!-- Galeri -->
<section id="galeri" class="mb-32"> </section>

    <div class="mt-20 text-center">
        <h2 class="text-3xl font-bold">
            Galeri
        </h2>
        <div class="mt-2 mx-auto w-16 h-1 bg-black lg:mb-8"></div>
    </div>


    <div class="container mx-auto p-10 cursor-pointer">
        <div id="custom-cards-container"
            class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 container mx-auto px-4 sm:px-6 lg:px-16 py-10  xl:m-1">
        </div>

        <div class="flex justify-center mt-4">
            <button id="custom-prev-btn" class="px-4 py-2 border rounded-l"
                onclick="changeCustomPage('prev')">&lt;</button>
            <div id="custom-pagination" class="flex space-x-1"></div>
            <button id="custom-next-btn" class="px-4 py-2 border rounded-r"
                onclick="changeCustomPage('next')">&gt;</button>
        </div>
    </div>

    <!--JavaSkrip Galeri -->

    <script>
        //Datanya Di JavaSkrip
        const customCardsData = [
            { src: '../img/m2.png', text: 'Pemasangan ACP' },
            { src: '../img/m2.png', text: 'Pemasangan ACP' },
            { src: '../img/m2.png', text: 'Pemasangan ACP' },
            { src: '../img/m2.png', text: 'Pemasangan ACP' },
            { src: '../img/m2.png', text: 'Pemasangan ACP' },
            { src: '../img/m2.png', text: 'Pemasangan ACP' },
            { src: '../img/m2.png', text: 'Pemasangan ACP' },
            { src: '../img/m2.png', text: 'Pemasangan ACP' },
            { src: '../img/m2.png', text: 'Pemasangan ACP' }
        ];
        const customCardsPerPage = 6;
        let currentCustomPage = 1;

        function renderCustomCards() {
            const cardsContainer = document.getElementById('custom-cards-container');
            cardsContainer.innerHTML = '';

            const startIndex = (currentCustomPage - 1) * customCardsPerPage;
            const endIndex = startIndex + customCardsPerPage;
            const cardsToShow = customCardsData.slice(startIndex, endIndex);

            //Tampilan nya di sisni
            cardsToShow.forEach(card => {
                const cardElement = `
                    <div class="relative w-full overflow-hidden rounded-xl group z-0">
                        <img src="${card.src}" alt="Gambar" class="w-full rounded-xl">
                        <div class="absolute inset-0 flex items-end py-4 px-4 rounded-xl bg-black bg-opacity-0 group-hover:bg-opacity-50 transition duration-300">
                            <h2 class="text-lg text-white font-semibold shadow-inner">${card.text}</h2>
                        </div>
                    </div>
                `;
                cardsContainer.innerHTML += cardElement;
            });
        }

        function renderCustomPagination() {
            const paginationContainer = document.getElementById('custom-pagination');
            paginationContainer.innerHTML = '';

            const totalPages = Math.ceil(customCardsData.length / customCardsPerPage);

            for (let i = 1; i <= totalPages; i++) {
                const pageElement = `
                    <button class="px-4 py-2 border ${i === currentCustomPage ? 'font-bold' : ''}" onclick="goToCustomPage(${i})">${i}</button>
                `;
                paginationContainer.innerHTML += pageElement;
            }
        }

        function changeCustomPage(direction) {
            const totalPages = Math.ceil(customCardsData.length / customCardsPerPage);
            if (direction === 'prev' && currentCustomPage > 1) {
                currentCustomPage--;
            } else if (direction === 'next' && currentCustomPage < totalPages) {
                currentCustomPage++;
            }
            renderCustomCards();
            renderCustomPagination();
        }

        function goToCustomPage(page) {
            currentCustomPage = page;
            renderCustomCards();
            renderCustomPagination();
        }

        document.addEventListener('DOMContentLoaded', () => {
            renderCustomCards();
            renderCustomPagination();
        });
    </script>



<!-- Testimoni -->
<section id="testimoni" > </section>

<div class="md:flex container mx-auto lg:px-20 mt-32 ">

<div class=" px-14 lg:px-8 lg:w-96">
    <div class="">
        <h2 class="text-3xl font-bold  ">
            Testimoni
        </h2>
        <div class="mt-1 w-10 h-1 bg-black mb-10"></div>
    </div>

    

        <div class="">

            <div>
                <p>Bagikan pengalaman anda yang  telah <br>
                    menggunakan layanan kami, dan <br>
                    bantu kami untuk memperbaiki<br>
                    layanan kami lebih baik lagi!<br>
                    
                </p>

                <Button class="bg-yellow-300 h-10 w-32 rounded-md mt-6 mb-16 hover:bg-yellow-400 transition-transform duration-300 ease-in-out transform hover:scale-110">Isi Testimoni</Button>
            </div>

        </div>
    </div>

         <!-- Card Testimoni -->

         <div class=" flex flex-row justify-center items-center  mx-auto w-auto sm:w-auto md:w-[480px] lg:w-[500px] xl:w-auto ">
            <!-- Tombol kiri Panah/Scroll -->
            <button class="bg-slate-200 rounded-full p-2 mr-4" id="customPrevBtnTestimoni">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
        
            <div class="relative max-w-6xl w-full overflow-hidden ">
                <div class="custom-carousel-testimoni">
                    <!-- Testimoni 1 -->
                    <div class="custom-carousel-item rounded-xl bg-slate-200 flex-shrink-0 ">
                        <div class="bg-[#003C43] rounded-xl h-28 text-center py-6 text-white">
                            <h2 class="text-lg font-semibold">[Nama 1]</h2>
                            <h2 class="text-lg font-semibold">[Panitia Mesjid 1]</h2>
                        </div>
                        <div class="p-6">
                            <p class="text-justify leading-relaxed custom-text ">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod semper quam, nec
                                mattis purus laoreet ac. Nullam tincidunt elit id nisi tincidunt, a condimentum felis
                                lobortis. Integer eu ipsum quis ligula ullamcorper consectetur sed nec nisi. Maecenas
                                fermentum odio nec justo feugiat, sit amet vestibulum dolor scelerisque. Sed fermentum
                                tortor a tellus. 
                            </p>
                        </div>
                    </div>
                    <!-- Testimoni 2 -->
                    <div class="custom-carousel-item rounded-xl bg-slate-200 flex-shrink-0 ">
                        <div class="bg-[#003C43] rounded-xl h-28 text-center py-6 text-white">
                            <h2 class="text-lg font-semibold">[Nama 2]</h2>
                            <h2 class="text-lg font-semibold">[Panitia Mesjid 2]</h2>
                        </div>
                        <div class="p-6">
                            <p class="text-justify leading-relaxed custom-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod semper quam, nec
                                mattis purus laoreet ac. Nullam tincidunt elit id nisi tincidunt, a condimentum felis
                                lobortis. Integer eu ipsum quis ligula ullamcorper consectetur sed nec nisi. Maecenas
                                fermentum odio nec justo feugiat, sit amet vestibulum dolor scelerisque. Sed fermentum
                                tortor a tellus.
                            </p>
                        </div>
                    </div>
                    <!-- Testimoni 3 -->
                    <div class="custom-carousel-item rounded-xl bg-slate-200 flex-shrink-0 ">
                        <div class="bg-[#003C43] rounded-xl h-28 text-center py-6 text-white">
                            <h2 class="text-lg font-semibold">[Nama 3]</h2>
                            <h2 class="text-lg font-semibold">[Panitia Mesjid 3]</h2>
                        </div>
                        <div class="p-6">
                            <p class="text-justify leading-relaxed custom-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod semper quam, nec
                                mattis purus laoreet ac. Nullam tincidunt elit id nisi tincidunt, a condimentum felis
                                lobortis. Integer eu ipsum quis ligula ullamcorper consectetur sed nec nisi. Maecenas
                                fermentum odio nec justo feugiat, sit amet vestibulum dolor scelerisque. Sed fermentum
                                tortor a tellus.
                            </p>
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak kartu testimoni di sini -->
                    <div class="custom-carousel-item rounded-xl bg-slate-200 flex-shrink-0 ">
                        <div class="bg-[#003C43] rounded-xl h-28 text-center py-6 text-white">
                            <h2 class="text-lg font-semibold">[Nama 4]</h2>
                            <h2 class="text-lg font-semibold">[Panitia Mesjid 4]</h2>
                        </div>
                        <div class="p-6">
                            <p class="text-justify leading-relaxed custom-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod semper quam, nec
                                mattis purus laoreet ac. Nullam tincidunt elit id nisi tincidunt, a condimentum felis
                                lobortis. Integer eu ipsum quis ligula ullamcorper consectetur sed nec nisi. Maecenas
                                fermentum odio nec justo feugiat, sit amet vestibulum dolor scelerisque. Sed fermentum
                                tortor a tellus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Tombol kanan Panah/Scroll -->
            <button class="bg-slate-200 rounded-full p-2 ml-4" id="customNextBtnTestimoni">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
        
    </div>

      
        


 <!-- Footer -->

 <footer class="bg-[#333333] h-96 mt-16">

    <div class="p-8">
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            <h2 class="text-lg font-bold text-white sm:text-xl">Alamat workshop kami</h2>
        </div>
        <p class="text-xs text-white ml-8 sm:text-base">
            Jl. Keramat Raya, RT. 12, No. 55, Kel. Sungai Bilu,<br>
            Kec. Banjarmasin Timur, Kota Banjarmasin,<br>
            Kalimantan Selatan, 70236
        </p>
        <div class="flex justify-start items-center mt-4">
            
            <p class="text-gray-400 text-xs mx-auto mt-10 sm:text-base">© 2024 PBL Kel 1</p>
        </div>
    </div>

</footer>

<script src="js/home.js"></script>

</body>

</html>