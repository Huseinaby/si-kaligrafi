<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $ornamen->nama_ornamen }}</title>
</head>
<body>
    <h2>{{ $ornamen->nama_ornamen }}</h2>
    <p>{{ $ornamen->jenis_ornamen }}</p>
    <p>{{ $ornamen->kategori }}</p>
    <p>{{ $ornamen->foto_ornamen }}</p>
    <p><a href="/bahans/{{ $ornamen->bahan_id }}">{{ $ornamen->bahan->nama_bahan}}</a></p>
    <p>{{ $ornamen->deskripsi_ornamen }}</p>
</body>
</html>