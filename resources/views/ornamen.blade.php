<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $ornamen->nama_ornamen }}</title>
</head>
<body>
    <h2>Ornamen {{ $ornamen->nama_ornamen }}</h2>
    <p>Jenis : {{ $ornamen->jenis_ornamen }}</p>
    <p>Kategori :{{ $ornamen->kategori }}</p>
    <p>Foto :{{ $ornamen->foto_ornamen }}.jpg</p>
    <p><a href="/bahans/{{ $ornamen->bahan->slug }}">Bahan : {{ $ornamen->bahan->nama_bahan}}</a></p>
    <p>Deskripsi :{{ $ornamen->deskripsi_ornamen }}</p>
</body>
</html>