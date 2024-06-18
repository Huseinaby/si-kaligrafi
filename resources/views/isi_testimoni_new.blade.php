<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kaligrafi | Isi Testimoni</title>
    <link rel="stylesheet" href="{{ asset('css/testimoni.css') }}">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body>
    <img src="" alt="" srcset="">

    <!-- Navbar -->
    <nav>
        <h1 class="logo">Kaligrafi</h1>

        <ul>
            <li>
                <a href="#">Tentang</a>
            </li>
            <li>
                <a href="#">Layanan</a>
            </li>
            <li>
                <a href="#">Bahan</a>
            </li>
            <li>
                <a href="#">Ornamen</a>
            </li>
            <li>
                <a href="#">Portofolio</a>
            </li>
            <li>
                <a href="#">Galeri</a>
            </li>
            <li>
                <a href="#">Testimoni</a>
            </li>
            <div class="gabut">
            <div ><img src="{{ asset('image/yae.png') }}" alt=""> </div>

            <div class="menu-icon"> <i class="ph ph-list"></i></div>
        </div>
        </ul>
      
        
    </nav>

    <!-- Header Bawah -->

    <div class="header">
        <h1 class="text">Formulir Testimoni</h1>
    </div>

    <!-- Form -->

   
   
    <div class="container">
       
        <form method="post" action="/user/isi_testimoni/{{ $karya->slug }}">
            @csrf
            <label for="namaKarya">Nama Karya</label>
            <input type="text" id="namaKarya" name="namaKarya" value="{{ $karya->nama_karya }}" readonly>

            
            <label for="namaMasjid">Nama Masjid</label>
            <input type="text" id="namaMasjid" name="namaMasjid" value="{{ $karya->nama_masjid }}" readonly>
            
            <label for="lokasi">Lokasi</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ $karya->lokasi }}" readonly>

            <label for="nama_panitia">Nama Panitia</label>
            <input type="text" id="nama_panitia" name="nama_panitia" placeholder="Masukkan Nama Panitia" required>

            <label for="isi_testimoni">Testimoni Anda</label>
            <textarea id="isi_testimoni" name="isi_testimoni" placeholder="testimoni Anda" required></textarea>

            <div class="button-container">
                <button>
                    <a href="/user/testimonis" style="text-decoration: none; color: initial">Batal</a>
                </button>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>

</body>

</html>

