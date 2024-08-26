
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    {{-- link config --}}
    @vite('resources/css/app.css')
    {{-- link icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<!-- bg-[#135D66] -->

<body class="bg-[#135D66]">

<!-- Navbar -->
<nav id="navbar" class="bg-[#003C43] p-4 fixed top-0 left-0 right-0 z-20 transition duration-300">
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



<!-- Form Login -->
<div class="relative bg-center bg-cover mx-auto h-[500px] sm:h-[600px] md:h-[700px] lg:w-[1050px] xl:w-[1380px] mt-32 z-10 flex flex-col justify-center items-center"
style="background-image: url('../img/bg.png');">

<div>
    <h1 class="text-4xl font-semibold text-center text-white sm:text-5xl">Register</h1>
    <div class="mt-2 mx-auto w-16 h-1 bg-white mb-8"></div>
    <div class="bg-slate-200 max-w-xs rounded-xl mx-auto mt-16 px-12 py-10 sm:max-w-xl sm:px-24 duration-500">
        <form action="">

            <!-- Nama Lengkap -->

            <h4 class="sm:text-lg font-semibold">Nama Lengkap</h4>
            <input class="h-8 w-56 sm:w-96 sm:h-10 rounded-lg sm:duration-700 px-2 my-4" placeholder="Nama Lengkap" type="text">
            
            
            <!-- Username -->
            <h4 class="sm:text-lg font-semibold">Username</h4>
            <input class="h-8 w-56 sm:w-96 sm:h-10 rounded-lg sm:duration-500 px-2" placeholder="Username" type="text">

            <!-- Password -->
            <h4 class="sm:text-lg mt-4 font-semibold">Password</h4>
            <div class="relative">
                <input id="password" class="h-8 w-56 sm:w-96 sm:h-10 rounded-lg sm:duration-500 pr-10 px-2" placeholder="Password" type="password">
                <span id="togglePassword" class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                    <i class="fas fa-eye text-gray-600"></i>
                </span>
            </div>

            <!-- Button Login -->
            <button class="bg-yellow-300 rounded-lg h-8 w-56 mt-8 sm:w-96 sm:h-10 sm:text-lg cursor-pointer hover:bg-yellow-400 sm:duration-300 font-semibold transition-transform duration-300 ease-in-out transform hover:scale-110">Resister</button>
      
            <p class="mt-10 text-center">Sudah punya akun? <span class="text-sky-600 hover:text-sky-700 cursor-pointer">Login</span> </p> 
        </form>
    </div>
</div>
</div>
<br>
<br>

{{-- javaskrip password --}}



<!-- Footer -->
<footer class="bg-[#333333] h-96 mt-20 lg:mt-28">
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

<script src="js/register.js"></script>

</body>
</html>