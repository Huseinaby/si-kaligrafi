<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testimoni</title>
</head>
<body>
    <h1>Daftar Testimoni</h1>
    @foreach ($testimonis as $testimoni)
    <h2><a href="testimoni/{{ $testimoni->id }}">{{ $testimoni->nama_masjid }}</a></h2>
    <ul>
        <li>Nama Panitia : {{ $testimoni->nama_panitia }}</li>
        <li>Isi Testimoni {{ $testimoni->isi_testimoni }}:</li>
        <li>Lokasi Masjid :{{ $testimoni->lokasi_masjid }}</li>
        <li>Nama Masjid : {{ $testimoni->nama_masjid }}</li>
    </ul>
    @endforeach
    <a href="/admin/dashboard">Kembali</a>
</body>
</html>