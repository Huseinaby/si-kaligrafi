@extends('layouts/admin/admin-dashboard')

@section('title', 'Testimoni Requests Management')

@section('dashboard-content')

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Testimoni Requests Management</h1>

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
                                <th>Action</th>
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
                                    <td>
                                        <form action="{{ route('testimonials.updateStatus', $row->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="accepted">
                                            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-check"></i> Accept</button>
                                        </form>
                                        <form action="{{ route('testimonials.updateStatus', $row->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="status" value="rejected">
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Reject</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
