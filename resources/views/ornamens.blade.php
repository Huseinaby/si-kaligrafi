<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ornamens | Kaligrafi</title>
</head>

<body>
    <h2>Macam Ornamen</h2>
    <h2>

        <a href="/dashboard">Kembali ke dashboard</a>
    </h2>
    @foreach ($ornamens as $ornamen)
        <h2><a href="/ornamens/{{ $ornamen->slug }}">Ornamen : {{ $ornamen->nama_ornamen }}</a></h2>
        <p>Jenis : {{ $ornamen->jenis_ornamen }}</p>
        <p><a href="/bahans/{{ $ornamen->bahan->slug }}">Bahan : {{ $ornamen->bahan->nama_bahan}}</a></p>
        <p>Deskirpsi : {{ $ornamen->deskripsi_ornamen }}</p>
    @endforeach
    
</body>

</html>
