<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regester</title>
    <link rel="stylesheet" href="css/navbar_new.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body>

    <!-- Navbar -->


    <nav>
        <h1 class="logo">Kaligrafi</h1>

        <ul id="menu-list" class="hidden">
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

            <!-- Tombol Sign In -->

            <div class="login">
                @if (Request::is('login'))
                    <li><a href="/register" class="tbl">Register</a></li>X
                @else
                    <li><a href="/login" class="tbl">Login</a></li>X
                @endif
            </div>

        </ul>
        <div id="icon-list" class="icon-list">
            <i class="ph ph-list"></i>
        </div>

    </nav>

   



<script src="navbar_new.js"></script>
</body>

</html>