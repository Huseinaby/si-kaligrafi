@extends('layouts/admin/admin-dashboard')

@section('title', 'Kaligrafi | Testimoni')

@section('dashboard-content')

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Testimoni</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formModalTambahTestimoni"><i class="fas fa-plus"></i> Tambah</a>
            </div>
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

        <!-- Form tambah data -->
        <div class="modal fade" id="formModalTambahTestimoni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-gray-800" id="exampleModalLabel">Tambah Data Testimoni</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- content modal -->
                        <form id="tambahTestimoniForm" action="{{ route('testimonies.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group text-gray-800">
                                <label for="id_user">Akun</label>
                                <select class="form-control" id="id_user" name="id_user" required>
                                    <option value="">Pilih Pengguna</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id_user }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                            </div>
                        
                            <div class="form-group text-gray-800">
                                <label for="karya_id">Pembelian (Karya)</label>
                                <select class="form-control" id="karya_id" name="karya_id" required>
                                    <option value="">Pilih Karya</option>
                                    @foreach($karyas as $karya)
                                        <option value="{{ $karya->id }}">{{ $karya->nama_karya }}</option>
                                    @endforeach
                                </select>
                            </div>
                        
                            <div class="form-group text-gray-800">
                                <label for="nama_panitia">Nama Panitia</label>
                                <input type="text" class="form-control" id="nama_panitia" name="nama_panitia" placeholder="Masukkan nama panitia" required>
                            </div>
                        
                            <div class="form-group text-gray-800">
                                <label for="isi_testimoni">Isi Testimoni</label>
                                <textarea class="form-control" id="isi_testimoni" name="isi_testimoni" rows="3" placeholder="Masukkan isi testimoni" required></textarea>
                            </div>
                        
                            <div class="form-group text-gray-800">
                                <label for="status">Status Testimoni</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="">Pilih Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="accepted">Accepted</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </div>
                        
                            <hr>
                        
                            <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="resetForm('tambahTestimoniForm')">Batal</button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        </form>
                          <!-- End content -->
                    
                    </div>
                    <!-- <div class="modal-footer">
                    </div> -->
                </div>
            </div>
        </div>

        <script>
            function resetForm(formId) {
                document.getElementById(formId).reset();
            }
        </script>

@endsection
