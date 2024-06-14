<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regester</title>
    <link rel="stylesheet" href="css/register_new.css">
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
                <li>
                    <a href="#">Sign Up</a>
                </li>
            </div>

        </ul>
        <div id="icon-list" class="icon-list">
            <i class="ph ph-list"></i>
        </div>

    </nav>

    <!-- Form Isi -->
    <br>
    <h1 class="user-login">User Login</h1>
    <br>
    <div class="container">

        <form action="#">
            <div class="form-group">
                <label for="nama-lengkap"><b> Nama Lengkap:</b></label>
                <input type="text" id="nama-lengkap" name="nama-lengkap" required>
            </div>
            <div class="form-group">
                <label for="username"><b> Username:</b></label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password"><b>Password:</b></label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit"><b> Sign Up</b></button>
            <br><br><br>
            <p>Don't have account? Sign Up</p>
        </form>
    </div>


    @include('partials.footer')

<script src="register_new.js"></script>
</body>

</html>