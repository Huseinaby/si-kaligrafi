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
              <li><a href="/login" class="tbl">Sign In</a></li>
            </div>

        </ul>
        <div id="icon-list" class="icon-list">
            <i class="ph ph-list"></i>
        </div>

    </nav>

    <!-- Form Isi -->
    <br>
    <h1 class="user-login">User Register</h1>
    <br>
    <div class="container">
        <form action="/register" method="POST">
          @csrf
          <div class="form-group">
            <div class="form-group">
              <label for="nama_lengkap"><b>Nama Lengkap:</b></label>
              <input class="is-invalid" type="text" id="nama_lengkap" name="nama_lengkap" required value="{{ old('nama_lengkap') }}">
              @error('nama_lengkap')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <label for="username"><b> Username:</b></label>
            <input class="is-invalid" type="text" id="username" name="username" required value="{{ old('username') }}">
            @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="password"><b>Password:</b></label>
            <input class="is-invalid" type="password" id="password" name="password" required>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <button type="submit"><b> Sign Up</b></button>
          <br><br>
          <p>Back to <a href="login">login</a></p>
        </form>
      </div>
    


    @include('partials.footer')

<script src="register_new.js"></script>
</body>

</html>