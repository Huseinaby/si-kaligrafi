@extends('layouts/admin/admin-dashboard')

@section('title', 'Galeri')

@section('dashboard-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Galeri</h1>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeInDown " role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formModalTambahGaleri"><i
                    class="fas fa-plus"></i> Tambah</a>
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
                                    <a href="" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#formModalEditGaleri{{ $row->id }}"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#formModalDeleteGaleri{{ $row->id }}"><i class="fas fa-trash"></i>
                                        Hapus</a>
                                </td>
                            </tr>

                            <!-- Modal Edit Data Galeri-->
                            <div class="modal fade" id="formModalEditGaleri{{ $row->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-gray-800" id="exampleModalLabel">Edit Data Galeri
                                            </h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <!-- content modal -->
                                            <form method="POST" action="{{ route('galeri.update', $row->slug) }}" enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                <div class="form-group text-gray-800">
                                                    <label for="judul">Judul</label>
                                                    <input type="text" class="form-control" id="judul" name="judul"
                                                    value="{{ old('judul', $row->judul) }}" required>
                                                </div>

                                                <div class="form-group text-gray-800">
                                                    <label for="deskripsi">Deskripsi</label>
                                                    <textarea class="form-control" id="deskripsi" name="deskripsi_galeri" 
                                                     rows="3" required>{{ old('deskripsi_galeri', $row->deskripsi_galeri) }}</textarea>
                                                </div>

                                                <div class="form-group text-gray-800">
                                                    <label for="image">Foto</label>
                                                    <input type="hidden" name="oldImage" value="{{ $row->foto_galeri }}">
                                                    <input type="file" class="form-control-file" id="imageEdit{{ $row->id }}" name="foto_galeri" onchange="previewImage(event, 'previewEdit{{ $row->id }}')">
                                                    @if ($row->foto_galeri)
                                                        <img src="{{ asset('storage/' . $row->foto_galeri) }}" alt="{{ $row->judul }}" class="img-thumbnail mt-2" width="150" id="previewEdit{{ $row->id }}">
                                                    @else
                                                        <img src="" alt="Preview" class="img-thumbnail mt-2" width="150" id="previewEdit{{ $row->id }}" style="display: none;">
                                                    @endif
                                                </div>

                                                <hr>
                                                </hr>

                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                                                    Simpan</button>
                                            </form>
                                            <!-- End content -->

                                        </div>


                                        <!-- <div class="modal-footer">
                            </div> -->
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Form Hapus Data -->
                            <div class="modal fade" id="formModalDeleteGaleri{{ $row->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-gray-800" id="exampleModalLabel">Hapus Data Galeri
                                            </h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin ingin menghapus data yang dipilih ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('galeri.destroy', $row->slug) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i> Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <form method="POST" action="/galeri/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group text-gray-800">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" autofocus required>
                        </div>

                        <div class="form-group text-gray-800">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi_galeri" rows="3" required></textarea>
                        </div>

                        <div class="form-group text-gray-800">
                            <label for="image">Foto</label>
                            <input type="file" class="form-control-file" id="imageTambah" name="foto_galeri" onchange="previewImage(event, 'previewTambah')" required>
                            <img src="" alt="Preview" class="img-thumbnail mt-2" width="150" id="previewTambah" style="display: none;">
                        </div>
                        

                        <hr>
                        </hr>

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
    <script>
        function previewImage(event, previewId) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById(previewId);
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    



@endsection
