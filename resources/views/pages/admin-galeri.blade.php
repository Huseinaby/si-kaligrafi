@extends('layouts/admin/admin-dashboard')

@section('title', 'Galeri')

@section('dashboard-content')

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Galeri</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formModalTambahGaleri"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin_galeri as $row)
                                <tr>
                                    <td>{{ $row->judul }}</td>
                                    <td>{{ $row->deskripsi_galeri }}</td>
                                    <td>{{ $row->foto_galeri }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
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