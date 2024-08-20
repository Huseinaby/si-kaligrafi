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
@include('responsive.navbar_new')



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