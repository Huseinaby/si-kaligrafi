@extends('partials\dashboard')

@section('title', 'Pesanan Anda')

@section('dashboard-content')

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Karya Anda</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Karya</th>
                                <th>Jenis Karya</th>
                                <th>Tempat</th>
                                <th>Nama Masjid</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($karyas as $row)
                                <tr>
                                    <td>{{ $row->nama_karya }}</td>
                                    <td>{{ $row->jenis_karya }}</td>
                                    <td>{{ $row->lokasi }}</td>
                                    <td>{{ $row->nama_masjid }}</td>☻
                                    <td>{{ $row->tgl_pembuatan }}</td>
                                    <td>
                                        <a href="/user/isi_testimoni/{{ $row->slug }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Beri Testimoni</a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection