<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaligrafi | Homepage</title>

    {{-- Config tailwind --}}
    @vite('resources/css/app.css')

    <!-- Pustaka Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Link CSS Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    {{-- css home --}}
    <link rel="stylesheet" href="css/homepage.css">

      <!--CDN Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/css/splide.min.css">

    {{-- splide --}}
    {{-- <link rel="stylesheet" href="./node_modules/@splidejs/splide/dist/css/splide.min.css"> --}}




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
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
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
                        @auth
                            <div class="relative inline-block">
                                <button
                                    class="bg-yellow-300 hover:bg-yellow-400 block px-4 py-2 rounded-lg font-medium text-xl focus:outline-none"
                                    id="userMenuButton">
                                    {{ Auth::user()->nama_lengkap }} <svg class="w-4 h-4 inline-block ml-2" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="userDropdown"
                                    class="hidden absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-lg z-10">
                                    @if (Auth::user()->level == 1)
                                        <a href="/admin"
                                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Dashboard</a>
                                    @else
                                        <a href="/user/dashboard"
                                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Dashboard</a>
                                    @endif
                                    <a href="" class="block px-4 py-2 text-gray-800 hover:bg-gray-100"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="/logout" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <!-- JavaScript to toggle dropdown -->
                            <script>
                                document.getElementById('userMenuButton').addEventListener('click', function() {
                                    document.getElementById('userDropdown').classList.toggle('hidden');
                                });
                            </script>
                        @else
                            <button
                                class="bg-yellow-300 hover:bg-yellow-400 block px-4 py-2 rounded-lg font-medium text-xl">
                                <a href="/login">Login</a>
                            </button>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar Mobile -->
        <div class="hidden lg:hidden bg-[#003C43]" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#layanan" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Layanan</a>
                <a href="#tentang" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Tentang</a>
                <a href="#bahan" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Bahan</a>
                <a href="#ornamen" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Ornamen</a>
                <a href="portofolio" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Portofolio</a>
                <a href="#galeri" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Galeri</a>
                <a href="#testimoni" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Testimoni</a>
        
                <!-- Blade directive untuk autentikasi -->
                @auth
                    <div class="relative">
                        <button
                            class="bg-yellow-300 hover:bg-yellow-400 block px-4 py-2 rounded-lg text-base font-medium  text-left"
                            id="userMenuButtonMobile">
                            {{ Auth::user()->nama_lengkap }} 
                            <svg class="w-4 h-4 inline-block ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown untuk user -->
                        <div id="userDropdownMobile" class="hidden bg-white mt-2  rounded-lg shadow-lg z-10">
                            @if (Auth::user()->level == 1)
                                <a href="/admin" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Dashboard</a>
                            @else
                                <a href="/user/dashboard" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Dashboard</a>
                            @endif
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100"
                                onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();">Logout</a>
                            <form id="logout-form-mobile" action="/logout" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    </div>
        
                    <!-- JavaScript untuk toggle dropdown -->
                    <script>
                        document.getElementById('userMenuButtonMobile').addEventListener('click', function() {
                            document.getElementById('userDropdownMobile').classList.toggle('hidden');
                        });
                    </script>
                @else
                    <button class="bg-yellow-300 hover:bg-yellow-400 block px-4 py-2 rounded-lg text-base font-medium ">
                        <a href="/login">Login</a>
                    </button>
                @endauth
            </div>
        </div>
        


    </nav>



    <!-- Title -->
    <div class="relative bg-center bg-cover h-[500px] sm:h-[600px] md:h-[800px] lg:h-[1000px] -mt-16 "
        style="background-image: url('../img/kali.png');">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="relative z-10 h-full flex flex-col justify-center text-left px-2  2xl:py-10 items-center ">

            <div class=" mb-16 mt-48  container mx-auto px-14 lg:px-20 ">
                <h2
                            class="text-2xl  font-semibold text-white mb-4 xl:py-14 xl:text-5xl lg:text-4xl md:text-3xl sm:text-2xl xl:-mb-2 ">
                             
                            <div class="">
                            
                                <div class="text-2xl xl:text-5xl lg:text-4xl md:text-3xl sm:text-2xl  typing-effect blink-animation" id="typingText"></div>
                            </div>
                            

                        </h2>
                        <div class="  rounded-lg max-w-lg w-full mx-auto sm:mx-0">
                            <p class="text-white text-justify font-semibold text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl">
                                Percantik masjid Anda dengan sentuhan seni kaligrafi islami dari kami. Rasakan keindahan yang
                                membawa kedamaian dan keberkahan. Kami menghadirkan kaligrafi dengan desain yang mempesona.
                            </p>
                        </div>
                        <button
                            class="xl:mt-12 flex items-center w-48 bg-yellow-300 hover:bg-yellow-400 text-green-900 font-semibold py-2 px-4 rounded-full shadow-lg mt-6 transition-transform duration-300 ease-in-out transform hover:scale-110">
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
                    <p
                        class="text-justify bg-slate-200 rounded-lg p-4 lg:p-8  font-semibold 2xl:w-[624px] xl:w-[500px] ">
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
                <div class="text-4xl mb-4 text-[#003C43]">
                    <i class="fas fa-trophy"></i>
                </div>
                <h2 class="xl:text-2xl text-xl font-bold mb-2 text-[#003C43]">Professional</h2>
                <p class="text-gray-600 text-center ">Kami berkomitmen memberikan layanan kaligrafi masjid dengan
                    standar
                    profesional yang tinggi di setiap proyek dikerjakan.</p>
            </div>
            <div class="bg-slate-200 p-6 rounded-lg shadow-xl flex flex-col items-center">
                <div class="text-4xl mb-4 text-[#003C43]">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h2 class="xl:text-2xl text-xl font-bold mb-2 text-[#003C43]">Berpengalaman</h2>
                <p class="text-gray-600 text-center">Dengan pengalaman bertahun-tahun dalam seni kaligrafi masjid, kami
                    memiliki
                    keahlian untuk menciptakan karya yang memukau</p>
            </div>
            <div class="bg-slate-200 p-6 rounded-lg shadow-xl flex flex-col items-center">
                <div class="text-4xl mb-4 text-[#003C43]">
                    <i class="fas fa-user-cog"></i>
                </div>
                <h2 class="xl:text-2xl text-xl font-bold mb-2 text-[#003C43]">Tenaga Ahli</h2>
                <p class="text-gray-600 text-center">Didukung oleh tenaga ahli yang terlatih dan berkompeten, kami
                    menjamin
                    setiap detail kaligrafi masjid Anda.</p>
            </div>
            <div class="bg-slate-200 p-6 rounded-lg shadow-xl flex flex-col items-center">
                <div class="text-4xl mb-4 text-[#003C43]">
                    <i class="fas fa-check-circle "></i>
                </div>
                <h2 class="xl:text-2xl text-xl font-bold mb-2 text-[#003C43]">Terpercaya</h2>
                <p class="text-gray-600 text-center">Kami telah dipercaya oleh banyak masjid untuk menghadirkan
                    kaligrafi yang
                    berkualitas tinggi, sebagai prioritas utama.</p>
            </div>

        </div>

    </div>


    <!-- Layanan -->

    <section id="layanan" class="mb-72"> </section>

    <div class="bg-slate-900 h-[620px]  md:h-[650px] lg:h-[750px]  xl:h-[800px]">

        <div class=" mb-16  px-14 lg:px-20 py-10 container mx-auto mt-32 ">
            <h2 class="text-3xl font-bold text-white">Layanan</h2>
            <div class="mt-1 w-10 h-1 bg-white "></div>
        </div>


       
    <div class="container mx-auto px-8 sm:px-14 lg:px-12 mt-10">
        <div class="splide splide-layanan max-w-7xl  2xl:max-w-[1500px] ">
            <div class="splide__track">
                <ul class="splide__list">

                    @foreach ($layanans as $layanan)
                    <li class="splide__slide">
                        <div class="relative mx-auto">
                            <img src="storage/public/storage/{{ $layanan->foto_layanan }}" alt="Raiden" class="xl:w-[400px] xl:h-[500px] lg:w-[300px] lg:h-[400px] w-[300px] h-[350px] object-cover rounded-2xl mx-auto">
                            <p class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-xl font-semibold bg-black bg-opacity-50 text-white rounded-lg py-2 px-4 transition-opacity duration-300 opacity-100">
                                {{ $layanan->nama_layanan }}
                            </p>
                        </div>
                    </li>
                    @endforeach
                
                </ul>
            </div>
        </div>

    </div>
         


    </div>





    <!-- Bahan -->


    <section id="bahan" class="mb-32"> </section>

    <div class="mt-20 text-center">
        <h2 class="text-3xl font-bold">
            Bahan
        </h2>
        <div class="mt-2 mx-auto w-16 h-1 bg-black mb-8"></div>
    </div>
    
    <div class="container mx-auto px-8 sm:px-14 lg:px-20 mt-24">
        <div class="splide splide-bahan w-full max-w-6xl 2xl:max-w-[1450px] px-4 mx-auto h-auto ">
            <div class="splide__track">
                <ul class="splide__list">
                    <!-- Slide 1 -->
                    @foreach ($bahans as $bahan)
                    <li class="splide__slide">
                        <div class="flex-none bg-slate-200 rounded-lg shadow-lg overflow-hidden max-w-64 mx-auto">
                            <img src="storage/public/storage/{{ $bahan->foto_bahan }}" alt="Image" class="w-full h-64 lg:h-80 object-cover rounded-xl">
                            <div class="p-4 h-52">
                                <h2 class="text-xl font-bold mb-2 text-center">{{ $bahan->nama_bahan }}</h2>
                                <div class="card-content object-cover">
                                    <p class="text-gray-700 text-sm text-justify object-cover h-32 overflow-hidden">
                                        {{ $bahan->deskripsi_bahan }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
  

   
    

    <!-- Ornamen -->
    <section id="ornamen" class="mb-32"> </section>

   

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
            @foreach ($ornamens as $ornamen)
                {
                    src: 'storage/public/storage/{{ $ornamen->foto_ornamen }}',
                    text: 'Bahan : {{ $ornamen->bahan->nama_bahan }}',
                    category: '{{ $ornamen->deskripsi_ornamen }}'
                },
            @endforeach
        ];
        const cardsPerPage = 6;
        let currentPage = 1;
        let currentFilter = 'all';

        function renderCards() {
            const cardsContainer = document.getElementById('cards-container');
            cardsContainer.innerHTML = '';

            const filteredCards = currentFilter === 'all' ? cardsData : cardsData.filter(card => card.category ===
                currentFilter);
            const startIndex = (currentPage - 1) * cardsPerPage;
            const endIndex = startIndex + cardsPerPage;
            const cardsToShow = filteredCards.slice(startIndex, endIndex);

            cardsToShow.forEach(card => {
                //Tampilan nya di sini
                const cardElement = `
                    <div class="relative w-full overflow-hidden rounded-xl group z-0">
                        <img src="${card.src}" alt="Gambar" class="w-full rounded-xl object-cover h-80 w-full">
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

            const filteredCards = currentFilter === 'all' ? cardsData : cardsData.filter(card => card.category ===
                currentFilter);
            const totalPages = Math.ceil(filteredCards.length / cardsPerPage);

            for (let i = 1; i <= totalPages; i++) {
                const pageElement = `
                    <button class="px-4 py-2 border ${i === currentPage ? 'font-bold' : ''}" onclick="goToPage(${i})">${i}</button>
                `;
                paginationContainer.innerHTML += pageElement;
            }
        }

        function changePage(direction) {
            const filteredCards = currentFilter === 'all' ? cardsData : cardsData.filter(card => card.category ===
                currentFilter);
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
                    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove(
                        'font-bold'));
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
            @foreach ($galeris as $galeri)
            {
                src: 'storage/public/storage/{{ $galeri->foto_galeri }}',
                text: '{{ $galeri->judul }}'
            },
            @endforeach            
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
                        <img src="${card.src}" alt="Gambar" class="rounded-xl object-cover h-80 w-full">
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
    <section id="testimoni"> </section>

    <div class="xl:flex container mx-auto lg:px-20 mt-32 ">

        <div class=" px-14 lg:px-8 lg:w-96">
            <div class="">
                <h2 class="text-3xl font-bold  ">
                    Testimoni
                </h2>
                <div class="mt-1 w-10 h-1 bg-black mb-10"></div>
            </div>



            <div class="">

                <div class=" xl:w-[250px] 2xl:w-[390px] lg:w-[650px]">
                    <p class="text-md  lg:text-2xl sm:text-xl">Bagikan pengalaman anda yang telah menggunakan 
                        layanan kami, dan  bantu kami untuk memperbaiki 
                        layanan kami lebih baik lagi!

                    </p>

                    <Button
                        class="bg-yellow-300 h-10 w-32 rounded-md mt-6 mb-16 hover:bg-yellow-400 transition-transform duration-300 ease-in-out transform hover:scale-110">Isi
                        Testimoni</Button>
                </div >

            </div>
        </div>

        <!-- Card Testimoni -->

        <div class=" 2xl:max-w-3xl xl:max-w-3xl mx-10 2xl:mx-44 px-4 lg:mx-4">
            <!-- Carousel 1 -->
            
            <div class="splide splide1">
              <div class="splide__track">
                <ul class="splide__list">
                  
                  @foreach ($testimonis as $testimoni)
                  <li class="splide__slide rounded-xl bg-slate-200 flex-shrink-0 h-96 ">
                    <div class="bg-[#003C43] rounded-xl h-28 text-center py-6 text-white">
                      <h2 class="text-lg font-semibold">{{ $testimoni->nama_panitia }}</h2>
                      <h2 class="text-lg font-semibold">{{ $testimoni->karya->nama_masjid }}</h2>
                    </div>
                    <div class="p-6">
                      <p class="text-justify leading-relaxed overflow-hidden h-52 ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod semper quam, nec
                        mattis purus laoreet ac. Nullam tincidunt elit id nisi tincidunt, a condimentum felis
                        lobortis. Integer eu ipsum quis ligula ullamcorper consectetur sed nec nisi. Maecenas
                        fermentum odio nec justo feugiat.
                      </p>
                    </div>
                  </li>
                  @endforeach
                  
                 
                 
                </ul>
              </div>
            </div>
        </div>




    </div>

    

    



    <!-- Footer -->

    <footer class="bg-[#333333] h-96 mt-16">

        <div class="p-8">
            <div class="flex items-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white mr-2" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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

 <!--  CDN Splide JS -->
 <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide/dist/js/splide.min.js"></script>

 {{-- js home --}}
 <script src="js/home.js"></script>

 {{-- splide node module --}}
 {{-- <script src="./node_modules/@splidejs/splide/dist/js/splide.min.js"></script> --}}

 


</body>

</html>
