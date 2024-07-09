<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaligrafi | Portofolio</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/portofolio.css">
</head>

<body>
    <!-- navbar -->

    <header class="menu">
        <div class="icon">
            <h2 class="logo"><a
                    href="\">KALIGRAFI</a></h2>
        </div>
            <ul>
                <li><a href="{{ url('/') }}#tentang">Tentang</a></li>
                <li><a href="{{ url('/') }}#layanan">Layanan</a></li>
                <li><a href="{{ url('/') }}#bahan">Bahan</a></li>
                <li><a href="{{ url('/') }}#ornamen">Ornamen</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="{{ url('/') }}#galeri">Galeri</a></li>
                <li><a href="{{ url('/') }}#testimoni">Testimoni</a></li>
                <li>
                    @auth
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-expanded="true">
                                {{ auth()->user()->nama_lengkap }}
                            </a>
                            <ul class="dropdown-menu">
                                @if (auth()->user()->level == '1')
                                    <li><a class="dropdown-item" href="/admin">Dashboard</a></li>
                                @else
                                    <li><a class="dropdown-item" href="/user/dashboard">Dashboard</a></li>
                                @endif
                                <li>
                                    <hr class="dropdown-divider">
                                    </hr>
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                    <li><a href="/login" class="btn">Sign In</a></li>
                @endauth
                </li>
            </ul>
    </header>

    <!-- carousel -->
    <br><br><br><br><br><br>


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

    <br><br><br><br>
    <h2 class="text">Portofolio</h2>

   

    <!-- card -->

    <div class="kotak row mt-5">

        @foreach ($portofolios as $portofolio)
            <div class="col-md-3">
                <div class="card ">
                    <img src="{{ asset('storage/public/storage/' . $portofolio->foto_karya )}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>{{ $portofolio->nama_karya }}</h5>
                        <p>{{ $portofolio->deskripsi_karya }}</p>
                        <p>{{ $portofolio->nama_masjid }}, {{ $portofolio->lokasi }}</p>
                        <p>Ditambahkan {{ $portofolio->created_at->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="page">
            {{ $portofolios->links() }}
        </div>
    </div>






    <br><br><br>

    @include('partials.footer')


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
