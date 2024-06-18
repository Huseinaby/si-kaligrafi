@extends('partials\dashboard')

@section('title', 'Dashboard')

@section('dashboard-content')

<h1 class="h3 mb-2 ml-4 text-gray-800">Daftar testimoni</h1>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeInDown" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
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
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $testimonis->count() }}</div>
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
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $karyas->count() }}</div>
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
                                <th>Nama Masjid</th>
                                <th>Nama Panitia</th>
                                <th>Lokasi</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($testimonis == null )
    
                            @else
                                @foreach ($testimonis as $row)
                                    <tr>
                                        <td>{{ $row->karya->nama_masjid }}</td>
                                        <td>{{ $row->nama_panitia }}</td>
                                        <td>{{ $row->karya->lokasi }}</td>
                                        <td>{{ $row->tgl_testimoni }}</td>
                                        <th>
                                            <a href="/user/edit_testimoni/{{ $row->id }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#formModalDeleteTestimoni{{ $row->id }}"><i class="fas fa-trash"></i> Hapus</a>
                                        </td>
                                        </th>
                                        <td>
                                            {{ $row->status }}
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="formModalDeleteTestimoni{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-gray-800" id="exampleModalLabel">Hapus Testimoni</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah Anda yakin ingin menghapus data yang dipilih ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="/user/hapus_testimoni/{{ $row->id }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
