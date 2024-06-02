<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kaligrafi Indah</title>
  <link rel="stylesheet" href="css/regester.css">
</head>

<body>

@include('partials.navbar')
  <br><br><br>

  <h1 class="satu">Register</h1>

  <div class="container">
    <h1><b>Register</b></h1>
    <form action="/register" method="POST">
      @csrf
      <div class="form-group">
        <div class="form-group">
          <label for="nama"><b>Nama Lengkap:</b></label>
          <input class="is-invalid" type="text" id="nama" name="nama" required>
          <div id="validationServer03Feedback" class="invalid-feedback">
            Please provide a valid city.
          </div>
      
        </div>
        <label for="username"><b> Username:</b></label>
        <input class="is-invalid" type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password"><b>Password:</b></label>
        <input class="is-invalid" type="password" id="password" name="password" required>
      </div>
      <button type="submit"><b> Sign Up</b></button>
      <br><br>
      <p>Back to <a href="login">login</a></p>
    </form>
  </div>

  <br><br><br><br>

@include('partials.footer')

</body>

</html>