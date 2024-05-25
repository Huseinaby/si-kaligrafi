<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bahans | Kaligrafi</title>
</head>

<body>
    <h2>Macam Ornamen</h2>
    <ul>
        @foreach ($bahans as $bahan)
            <li><a href="/bahans/{{ $bahan->id }}">{{ $bahan->nama_bahan }}</a></li>
        @endforeach
    </ul>
</body>

</html>
