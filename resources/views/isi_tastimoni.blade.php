<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaligrafi Indah</title>

    <link rel="stylesheet" href="css/isi.css">
  </head>
  <body>
    <!-- navbar -->
    
    <header class="menu">
        <div class="icon">
          <h2 class="logo"><a href="\">Kaligrafi</a></h2>
        </div>
<div class="heder">


</div>

          <ul>
            <li><a href="tentang">Tentang</a></li>
            <li><a href="layanan">Layanan</a></li>
            <li><a href="bahan">Bahan</a></li>
            <li><a href="ornamens">Ornamen</a></li>
            <li><a href="portofolio">Portofolio</a></li>
            <li><a href="galeri">Galeri</a></li>
            <li><a href="testimonis">Testimoni</a></li>
            <li> <img src="image/yae.png" alt=""></li>
         
           
          </ul>
        </header>

        <!-- header  -->

        <header class="site-header">
           <h1>Formulir Testimoni</h1>
        </header>

<!-- form -->

<br><br><br><br><br><br>

<div class="container">
    
    <form>
        <div class="form-group">
            <label for="namaLengkap">Nama Lengkap:</label>
            <input type="text" id="namaLengkap" name="namaLengkap" required>
        </div>
        <div class="form-group">
            <label for="namaMesjid">Nama Mesjid:</label>
            <input type="text" id="namaMesjid" name="namaMesjid" required>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi:</label>
            <input type="text" id="lokasi" name="lokasi" required>
        </div>
        <div class="form-group">
            <label for="testimoni">Testimoni:</label>
            <textarea id="testimoni" name="testimoni" rows="6" required></textarea>
        </div>
        <button type="submit" class="submit-btn">Kirim</button>
    </form>
</div>




<br><br><br><br><br><br><br><br>

@include('partials.footer')

    
</body>
</html>




