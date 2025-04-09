
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    {{-- link config --}}
    @vite('resources/css/app.css')
    {{-- link icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<!-- bg-[#135D66] -->

<body class="bg-[#135D66]">

<!-- Navbar -->
<nav id="navbar" class="bg-[#003C43] p-4 fixed top-0 left-0 right-0 z-50 transition duration-300">
    <div class="max-w-full mx-auto px-2 lg:px-2">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="text-gray-300 px-3 py-2 rounded-md text-xl font-bold">Bangro Kalighrafi</a>
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
                    <a href="/#layanan"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Layanan</a>
                    <a href="/#tentang"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Tentang</a>
                    <a href="/#bahan"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Bahan</a>
                    <a href="/#ornamen"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Ornamen</a>
                    <a href="portofolio"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Portofolio</a>
                    <a href="/#galeri"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Galeri</a>
                    <a href="/#testimoni"
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
                    @endauth
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar Mobile -->
    <div class="hidden lg:hidden bg-[#003C43]" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/#layanan" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Layanan</a>
            <a href="/#tentang" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Tentang</a>
            <a href="/#bahan" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Bahan</a>
            <a href="/#ornamen" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Ornamen</a>
            <a href="portofolio" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Portofolio</a>
            <a href="/#galeri" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Galeri</a>
            <a href="/#testimoni" class="hover:bg-gray-700 text-white block px-3 py-2 rounded-md text-base font-medium">Testimoni</a>
    
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
                    <div id="userDropdownMobile" class="hidden bg-white mt-2 w-full rounded-lg shadow-lg z-10">
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
            @endauth
        </div>
    </div>
    

</nav>


<script src="js/navbar.js"></script>



</body>
</html>
