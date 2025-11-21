<!-- resources/views/no-access.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>{{ $requestCode }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="alert alert-danger">
            <h4 class="alert-heading">{{ $messageRequest }}</h4>
        </div>
    </div>
</body>
</html>
