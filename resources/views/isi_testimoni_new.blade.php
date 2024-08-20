<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni</title>
    {{-- link config --}}
    @vite('resources/css/app.css')
</head>


<body class="bg-white  ">

<!-- Navbar -->
<nav id="navbar" class="bg-white p-4 fixed top-0 left-0 right-0 z-20 transition duration-300">
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
                        class="text-[#003C43] hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Layanan</a>
                    <a href="#tentang"
                        class="text-[#003C43] hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Tentang</a>
                    <a href="#bahan"
                        class="text-[#003C43] hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Bahan</a>
                    <a href="#ornamen"
                        class="text-[#003C43] hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Ornamen</a>
                    <a href="portofolio"
                        class="text-[#003C43] hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Portofolio</a>
                    <a href="#galeri"
                        class="text-[#003C43] hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Galeri</a>
                    <a href="#testimoni"
                        class="text-[#003C43] hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Testimoni</a>
                    <button
                        class="bg-yellow-300 hover:bg-yellow-400 block px-4 py-2 rounded-lg font-medium text-xl"><a
                            href="register">Register</a></button>
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
                    href="register">Register</a></button>
        </div>
    </div>
</nav>



<div class="bg-[#135D66] mt-24 h-26">
    <h1 class="text-white text-3xl py-8 px-7 sm:text-4xl font-semibold">Formulir Testimoni</h1>
</div>

<!-- Form Isi Testimoni -->

<form class="bg-slate-200 p-10 rounded-xl mt-14 max-w-xs mx-auto sm:max-w-xl duration-500">
    <div class="mb-6">
        <label class="block text-base font-semibold text-gray-900 mb-2 sm:text-lg" for="lokasi">Nama Panitia</label>
        <input class="rounded-md p-2 w-full border border-gray-300" type="text" id="lokasi" name="lokasi" placeholder=" Masukan Nama Panitia" required>
    </div>
    <div class="mb-6">
        <label class="block text-base font-semibold text-gray-900 mb-2 sm:text-lg" for="testimoni">Testimoni Anda</label>
        <textarea class="rounded-md p-2 w-full border border-gray-300" id="testimoni" name="testimoni" rows="6" placeholder="Masukan Testimoni Anda" required></textarea>
    </div>
    <div class="flex justify-end">
        <button type="button" class="text-base sm:text-lg font-semibold bg-yellow-300 rounded-lg h-10 w-24 hover:bg-yellow-400 mr-4 transition-transform duration-300 ease-in-out transform hover:scale-110">Batal</button>
        <button type="submit" class="text-base sm:text-lg font-semibold bg-yellow-300 rounded-lg h-10 w-24 hover:bg-yellow-400 transition-transform duration-300 ease-in-out transform hover:scale-110">Simpan</button>
    </div>
</form>



    
<!-- Footer -->

<footer class="bg-[#333333] h-96 mt-24">

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

<script src="js/testimoni.js"></script>

</body>
</html>