@extends('partials\dashboard')

@section('title', 'Dashboard')

@section('dashboard-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <!-- Pending Requests Card Example (warna kuning untuk pemberitahuan/warning) -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Testimoni</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">count</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Card Example (warna biru untuk informasi/information)-->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Karya
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">count</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
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

                    <h1 class="h4 mb-2 text-gray-800">Testimoni Anda</h1>
                    <hr>
                    </hr>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Mesjid</th>
                                <th>Alamat Mesjid</th>
                                <th>Tanggal Testimoni</th>
                                <th>Aksi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($testimonis == null )
    
                            @else
                                @foreach ($testimonis as $row)
                                    <tr>
                                        <td>{{ $row->nama_masjid }}</td>
                                        <td>{{ $row->nama_panitia }}</td>
                                        <td>{{ $row->lokasi }}</td>
                                        <td>{{ $row->tgl_testimoni }}</td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                                Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel login history -->

    <!-- To-Do List -->

@endsection
