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
                                        <a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Beri Testimoni</a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Data Galeri-->
        <div class="modal fade" id="formModalTambahGaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-gray-800" id="exampleModalLabel">Tambah Data Galeri</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- content modal -->
                        <form>

                            <div class="form-group text-gray-800">
                                <label for="exampleInputPassword1">Judul</label>
                                <input type="text" class="form-control" id="judul1" required>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleFormControlFile1">Foto</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
                            </div>

                            <hr></hr>

                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                          </form>
                          <!-- End content -->
                    
                    </div>
                    <!-- <div class="modal-footer">
                    </div> -->
                </div>
            </div>
        </div>

@endsection