<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaligrafi | Login</title>

   

    <link rel="stylesheet" href="css/login_new.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body>

    <!-- Navbar -->


    <nav>
        <h1 class="logo">KALIGRAFI</h1>

        <ul id="menu-list" class="hidden">
            <li>
                <a href="/">Tentang</a>
            </li>
            <li>
                <a href="/#layanan">Layanan</a>
            </li>
            <li>
                <a href="/#bahan">Bahan</a>
            </li>
            <li>
                <a href="/#ornamen">Ornamen</a>
            </li>
            <li>
                <a href="/portofolio">Portofolio</a>
            </li>
            <li>
                <a href="/#galeri">Galeri</a>
            </li>
            <li>
                <a href="/#testimoni">Testimoni</a>

            </li>

            <!-- Tombol Sign In -->

            <div class="login">
                <li><a href="/register" class="tbl">Sign Up</a></li>
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
        @if (@session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (@session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
            </div>
        @endif
        <form action="\login" method="POST">
            @csrf
            <div class="form-group">
                <label for="username"><b> Username:</b></label>
                <input type="text" id="username" name="username" autofocus required>
            </div>
            <div class="form-group">
                <label for="password"><b>Password:</b></label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit"><b> <a href="">Sign In</a></b></button>
            <br><br>
            <p>Don't have account? <a href="register">Sign Up</a></p>
            <br>
            <br>
            <br>
        </form>
    </div>

    <br>
    <br>
    <br>
    <br>
    
   

    @include('partials.footer')


    <script src="login_new.js"></script>
</body>

</html>
