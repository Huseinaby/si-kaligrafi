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
                                <th>Akun</th>
                                <th>Nama Panitia</th>
                                <th>Isi Testimoni</th>
                                <th>Tanggal Testimoni</th>
                                <th>Lokasi Masjid</th>
                                <th>Nama Masjid</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admin_testimoni as $row)
                                <tr>
                                    <td>{{ $row->user->username }}</td>
                                    <td>{{ $row->nama_panitia }}</td>
                                    <td>{{ $row->isi_testimoni }}</td>
                                    <td>{{ $row->tgl_testimoni }}</td>
                                    <td>{{ $row->lokasi_masjid }}</td>
                                    <td>{{ $row->nama_masjid }}</td>
                                    <td>{{ $row->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
