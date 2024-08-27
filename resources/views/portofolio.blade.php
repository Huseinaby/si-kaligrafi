<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaligrafi | Portofolio</title>

    {{-- link config tailwind --}}
    @vite('resources/css/app.css')

    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    <style>
        #indicators-carousel {
            margin-top: 5rem;
        }
    </style>

</head>

<body class="bg-white  ">

    <!-- Navbar -->
    @include('responsive.navbar_new')


    <!-- Carousel -->


    <div class="">
        <h1 class="font-semibold text-3xl py-8 md:py-0 px-7 sm:text-4xl"></h1>
    </div>

    <div class="container mx-auto px-14 lg:px-20 mt-32 xl:mt-48   ">

        <div id="indicators-carousel" class="relative w-full" data-carousel="static">
            <!-- Pembungkus Carousel -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="../img/g1.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/g2.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/g3.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/g1.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="../img/g2.png"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Indikator Slider -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Kontrol Slider -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>

    <!-- Tulisan Portofolio -->


    <!-- Card Karya -->

    <div class="container mx-auto px-14 lg:px-20 mt-20 sm:mt-32">
        <div class="container mx-auto ">
            <div class=" mb-16 ">
                <h2 class="text-3xl font-bold">Portofolio</h2>
                <div class="mt-1 w-10 h-1 bg-black "></div>
            </div>

            <div id="card-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Cards will be inserted here dynamically -->
            </div>

            <!-- Pagination -->
            <div id="pagination" class="flex justify-center mt-24">
                <nav aria-label="Page navigation">
                    <ul id="pagination-list" class="inline-flex items-center -space-x-px">
                        <!-- Pagination items will be inserted here dynamically -->
                    </ul>
                </nav>
            </div>
        </div>

    </div>


    <script>
        // datanya di sini
        const cardsData = [
            @foreach ($portofolios as $portofolio)
                {
                    title: "{{ $portofolio->nama_masjid }}",
                    year: "{{ $portofolio->tgl_pembuatan }}".substring(0, 10), 
                    category: "{{ $portofolio->jenis_karya }}",
                    image: "storage/public/storage/{{ $portofolio->foto_karya }}"
                },
            @endforeach
        ];


        const cardsPerPage = 6;
        let currentPage = 1;

        function renderCards() {
            const cardContainer = document.getElementById('card-container');
            cardContainer.innerHTML = '';

            const startIndex = (currentPage - 1) * cardsPerPage;
            const endIndex = startIndex + cardsPerPage;
            const cardsToDisplay = cardsData.slice(startIndex, endIndex);

            cardsToDisplay.forEach(card => {
                //tampilannya disini
                const cardElement = `
                <div class="bg-white shadow-lg rounded-lg overflow-hidden cursor-pointer">
                    <img class="w-full h-48 object-cover" src="${card.image}" alt="Image">
                    <div class="p-4 bg-[#135D66] text-white">
                        <h3 class="text-xl font-semibold mb-2 text-white">${card.title}</h3>
                        <p class=" mb-1 text-white">${card.year}</p>
                        <p class="text-shite">Kategori karya: ${card.category}</p>
                    </div>
                </div>
            `;
                cardContainer.innerHTML += cardElement;
            });
        }

        function renderPagination() {
            const paginationList = document.getElementById('pagination-list');
            paginationList.innerHTML = '';

            const totalPages = Math.ceil(cardsData.length / cardsPerPage);

            if (totalPages <= 1) return;

            for (let i = 1; i <= totalPages; i++) {
                const paginationItem = `
                <li>
                    <a href="#" onclick="changePage(${i})" class="px-3 py-2 leading-tight ${i === currentPage ? 'text-white bg-blue-500' : 'text-gray-500 bg-white'} border border-gray-300 hover:bg-gray-100 hover:text-gray-700">${i}</a>
                </li>
            `;
                paginationList.innerHTML += paginationItem;
            }
        }

        function changePage(page) {
            currentPage = page;
            renderCards();
            renderPagination();
        }

        document.addEventListener('DOMContentLoaded', () => {
            renderCards();
            renderPagination();
        });
    </script>



    <!-- Footer -->

    <footer class="bg-[#333333] h-96 mt-24">
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

</body>

</html>
