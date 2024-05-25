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
    
    @foreach ($ornamens as $ornamen)
        <h2><a href="/ornamens/{{ $ornamen->id }}">{{ $ornamen->nama_ornamen }}</a></h2>
        <p>{{ $ornamen->jenis_ornamen }}</p>
        <p>{{ $ornamen->deskripsi_ornamen }}</p>
    @endforeach
    
</body>

</html>
