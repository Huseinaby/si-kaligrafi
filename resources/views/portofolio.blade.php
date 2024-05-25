
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaligrafi Indah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/portofolio.css">
  </head>
  <body>
    <!-- navbar -->
    
    <header class="menu">
        <div class="icon">
          <h2 class="logo"><a href="\">Kaligrafi</a></h2>
        </div>
          <ul>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Bahan</a></li>
            <li><a href="#">Ornamen</a></li>
            <li><a href="">Portofolio</a></li>
            <li><a href="#">Galeri</a></li>
            <li><a href="testimonis">Testimoni</a></li>
            <li><a href="register" class="tbl">Sign In</a></li>
          </ul>
        </header>

        <!-- carousel -->
<br>


        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/contoh.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/contoh.png" class="d-block w-100 " alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/contoh.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      
        <h2 class="text">Portofolio</h2>

        <br><br>
        
      <!-- card -->

      <div class="kotak row">
        <div class="col-md-3">
          <div class="card ">
            <img src="image/baru.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Beberapa contoh teks cepat untuk dibuat pada judul kartu dan mengisi sebagian besar konten kartu.</p>
            </div>
          </div>
        </div>
      
        <div class="col-md-3">
          <div class="card ">
            <img src="image/baru.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Beberapa contoh teks cepat untuk dibuat pada judul kartu dan mengisi sebagian besar konten kartu.</p>
            </div>
          </div>
        </div>
      
        <div class="col-md-3">
          <div class="card" >
            <img src="image/baru.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Beberapa contoh teks cepat untuk dibuat pada judul kartu dan mengisi sebagian besar konten kartu.</p>
            </div>
          </div>
        </div>
      </div>

      <br><br><br>

      <div class="kotak row">
        <div class="col-md-3">
          <div class="card ">
            <img src="image/baru.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Beberapa contoh teks cepat untuk dibuat pada judul kartu dan mengisi sebagian besar konten kartu.</p>
            </div>
          </div>
        </div>
      
        <div class="col-md-3">
          <div class="card ">
            <img src="image/baru.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Beberapa contoh teks cepat untuk dibuat pada judul kartu dan mengisi sebagian besar konten kartu.</p>
            </div>
          </div>
        </div>
      
        <div class="col-md-3">
          <div class="card" >
            <img src="image/baru.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Beberapa contoh teks cepat untuk dibuat pada judul kartu dan mengisi sebagian besar konten kartu.</p>
            </div>
          </div>
        </div>
      </div>
      
      
<br><br><br>
       
@include('partials.footer')
    

        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>