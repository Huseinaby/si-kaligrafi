@extends('layouts/admin/admin-dashboard')

@section('title', 'Kaligrafi | Dashboard')

@section('dashboard-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">

            <!-- Users Card Example (warna hijau untuk normal) -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Users (Pengguna)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Card Example (warna hijau untuk normal) -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Services (Layanan)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $layanans->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tools fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- All Testimonies Card Example (warna kuning untuk pemberitahuan/warning) -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Testimoni</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $testimonis->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example (warna kuning untuk pemberitahuan/warning) -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pending Requests</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $testimoniPending->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                <th>Status Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin_req_testimoni as $row)
                                <tr>
                                    <td>{{ $row->user->username }}</td>
                                    <td>{{ $row->nama_panitia }}</td>
                                    <td>{{ $row->karya->nama_karya }}</td>
                                    <td>{{ $row->karya->nama_masjid }}</td>
                                    <td>{{ $row->isi_testimoni }}</td>
                                    <td>{{ $row->tgl_testimoni }}</td>
                                    <td>{{ $row->status }}</td>
                                    <td>
                                        <a href="{{ url('accept_status', $row->id) }}" class="btn btn-success"><i
                                                class="fas fa-check"></i> Accept</a>
                                        <a href="{{ url('reject_status', $row->id) }}" class="btn btn-danger"><i
                                                class="fas fa-times"></i> Reject</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel login history -->

    <!-- To-Do List -->

@endsection
