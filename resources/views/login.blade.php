<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaligrafi Indah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    @include('partials.navbar')

    <br><br><br>

    <h1 class="satu">User Login</h1>

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
        <h1><b> Login</b></h1>
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
        </form>
    </div>

    <br><br><br><br>

    @include('partials.footer')

</body>

</html>
