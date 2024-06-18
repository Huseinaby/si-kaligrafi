@extends('layouts/admin/admin-dashboard')

@section('title', 'Testimoni')

@section('dashboard-content')

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Testimoni</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Akun (Username)</th>
                                <th>Nama Panitia</th>
                                <th>Pesanan (Karya)</th>
                                <th>Nama Mesjid</th>
                                <th>Isi Testimoni</th>
                                <th>Tanggal Testimoni</th>
                                <th>Status Now</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admin_testimoni as $row)
                                <tr>
                                    <td>{{ $row->user->username }}</td>
                                    <td>{{ $row->nama_panitia }}</td>
                                    <td>{{ $row->karya->nama_karya }}</td>
                                    <td>{{ $row->karya->nama_masjid }}</td>
                                    <td>{{ $row->isi_testimoni }}</td>
                                    <td>{{ $row->tgl_testimoni }}</td>
                                    <td>{{ $row->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
