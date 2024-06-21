<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
    <title>Home Page</title>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>
<nav>
    <div class="header">
    <ul>
        <li>
            <h1>KALIGRAFI</h1>
        </li>
        <li><a href="tentang1">Tentang</a></li>
        <li><a href="layanan">Layanan</a></li>
        <li><a href="bahan">Bahan</a></li>
        <li><a href="ornamen">Ornamen</a></li>
        <li><a href="portofolio">Portofolio</a></li>
        <li><a href="galeri">Galeri</a></li>
        <li><a href="testimoni">Testimoni</a></li>
        <li>
            @auth
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="true">
                        {{ auth()->user()->nama_lengkap }}
                    </a>
                    <ul class="dropdown-menu">
                        @if (auth()->user()->level == '1')
                            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
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

</div>
</nav>
<div class="content">
    <h2>KALIGRAFI</h2>
    <h3>Pembuatan</h3>
    <p class="textutama"> Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Pariatur sit nisi a nemo, nihil
        voluptatibus dicta veniam <br> fugiat vitae, eveniet autem? Laboriosam aliquam<br> beatae iste fuga facere repellat
        perspiciatis odio.</p>
    <button class="btn"><a href="https://wa.me/6285845510008"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path
                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
            </svg> Hubungi Kami</a></button>
</div>

{{-- Tentang --}}


<div class="tentang">
    <img src="image/tentang.jpg">
    <div class="textten">
        <h4>Tentang Kami</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique explicabo deserunt cum iste, tenetur
            repellat! <br> Doloremque vitae blanditiis sunt itaque.<br> Impedit facilis voluptatum cupiditate nostrum
            sunt dolor dicta nihil enim?</p>
    </div>





</div>
<div class="kualitas">
    <h2>Kualitas Kami</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="logku"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935" />
                            </svg></h5>
                        <h6 class="card-title">Profesional</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="logku"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                <path
                                    d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                            </svg></h5>
                        <h6 class="card-title">Berpengalaman</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="logku"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                                <path
                                    d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z" />
                            </svg></h5>
                        <h6 class="card-title">Tenaga Ahli</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="logku"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                <path
                                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg></h5>
                        <h6 class="card-title">Terpercaya</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- Layanan --}}

    <div class="layanan">
        <h5>Layanan</h5>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="image/layanan1.jpg"></div>
                <div class="swiper-slide"><img src="image/layanan2.jpg"></div>
                <div class="swiper-slide"><img src="image/layanan3.jpg"></div>
                <div class="swiper-slide"><img src="image/layanan4.jpg"></div>
                <div class="swiper-slide"><img src="image/layanan5.jpg"></div>
                <div class="swiper-slide"><img src="image/layanan6.jpg"></div>
                <div class="swiper-slide"><img src="image/layanan7.jpg"></div>
                <div class="swiper-slide"><img src="image/layanan8.jpg"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

{{-- Bahan --}}

        <div class="bahan">
            <h1>Bahan</h1>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/layanan1.jpg" class="card-img-top" alt="Professional Image">
                                <h6 class="card-title">PVC</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/layanan1.jpg" class="card-img-top" alt="Experienced Image">
                                <h6 class="card-title">PVC</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/layanan1.jpg" class="card-img-top" alt="Expert Image">
                                <h6 class="card-title">PVC</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="image/layanan1.jpg" class="card-img-top" alt="Trustworthy Image">
                                <h6 class="card-title">PVC</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{-- Ornamen --}}


        <div class="ornamen">
            <h6>Ornamen</h6>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="grid-slider">
                            <!-- Baris 1 -->
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 1">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 2">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 3">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                            <!-- Baris 2 -->
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 4">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 5">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 6">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Galeri --}}
        <div class="galeri">
            <h6>Galeri</h6>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="grid-slider">
                            <!-- Baris 1 -->
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 1">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 2">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 3">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                            <!-- Baris 2 -->
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 4">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 5">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                            <div class="grid-item">
                                <img src="image/layanan1.jpg" alt="Image 6">
                                <div class="overlay">
                                    <h4>Testing</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{-- Testimoni --}}

        <div class="testimoni">
            <div class="testi-header">
                <h4>Testimoni</h4>
                <p>Bagikan <strong>Pengalaman</strong> anda<br> yang telah menggunakan<br> layanan kami, dan bantu<br>
                    kami memperbaiki layanan<br> kami lebih baik lagi!</p>
                <button class="isi-testi-btn">Isi Testimoni</button>
            </div>

        </div>
        <footer id="navbar">
            <div class="footer-side">
                <div class="footer-address">
                    <img src="../image/Ok.svg" alt="icon ok">
                    <h4>Alamat Workshop Kami</h4>
                </div>


                <p class="address">Jl. Keramat Raya, RT. 12 No. 55 Kel. Sungai Bilu,<br>
                    Kec. Banjarmasin Timur Kota Banjarmasin, <br>
                    Kalimantan Selatan,70236</p>
            </div>
            <br>
            <div class="footer-address2">
                <img src="../image/c.png" alt="">
                <p>2024 [merk]</p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
        <script src="homepage.js"></script>




        
        </body>

</html>
