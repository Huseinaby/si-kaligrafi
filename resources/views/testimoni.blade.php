<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testimoni {{ $testimoni->nama_masjid }}</title>
</head>
<body>
    <h1>{{ $testimoni->nama_masjid }}</h1>
    <h4>{{ $testimoni->nama_panitia }}</h4>
    <h4>{{ $testimoni->lokasi_masjid }}</h4>
    <p>{{ $testimoni->isi_testimoni }}</p>
    <a href="/testimonis">Kembali</a>

</body>
</html>