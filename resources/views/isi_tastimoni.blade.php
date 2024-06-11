<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaligrafi Indah</title>

    <link rel="stylesheet" href="css/isi.css">
  </head>
  <body>
    @include('partials.navbar')

        <!-- header  -->

        <header class="site-header">
           <h1>Formulir Testimoni</h1>
        </header>

<!-- form -->

<br><br><br><br><br><br>

<div class="container-isi">
    
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




