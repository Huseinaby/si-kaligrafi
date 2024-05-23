
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kaligrafi Indah</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body>

@include('partials.navbar')

  <br><br><br>

  <h1 class="satu">User Login</h1>

  <div class="container">
    <h1><b> Login</b></h1>
    <form action="#">
      <div class="form-group">
        <label for="username"><b> Username:</b></label>
        <input type="text" id="username" name="username" required>
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