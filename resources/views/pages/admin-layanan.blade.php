@extends('layouts/admin/admin-dashboard')

@section('title', 'Layanan')

@section('dashboard-content')

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Layanan</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show animate__animated animate__fadeInDown" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formModalTambahLayanan"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul (Layanan)</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin_layanan as $row)
                                <tr>
                                    <td>{{ $row->nama_layanan }}</td>
                                    <td><img src="{{ asset('storage/public/storage/' . $row->foto_layanan) }}" alt="Gambar Layanan" width="100"></td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#formModalEditLayanan{{ $row->id }}"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#formModalDeleteLayanan{{ $row->id }}"><i class="fas fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>

                                <!-- Modal Edit Data -->
                                <div class="modal fade" id="formModalEditLayanan{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-gray-800" id="exampleModalLabel">Edit Data Layanan</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editLayananForm{{ $row->id }}" action="{{ route('layanan.update', ['slug' => $row->slug]) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    
                                                    <div class="form-group text-gray-800">
                                                        <label for="nama_bahan">Judul (Layanan)</label>
                                                        <input type="text" class="form-control" id="nama_layanan" name="nama_layanan" value="{{ old('nama_layanan', $row->nama_layanan) }}" required>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="foto_layanan">Gambar</label>
                                                        <input type="hidden" name="oldImage" value="{{ $row->foto_layanan }}">
                                                        <input type="file" class="form-control-file" id="foto_layanan" name="foto_layanan" onchange="previewImage(event, 'previewEdit{{ $row->id }}')">
                                                        @if ($row->foto_layanan)
                                                            <img src="{{ asset('storage/public/storage/' . $row->foto_layanan) }}" alt="{{ $row->nama_layanan }}" class="img-thumbnail mt-2" width="150" id="previewEdit{{ $row->id }}">
                                                        @else
                                                            <img src="" alt="Preview" class="img-thumbnail mt-2" width="150" id="previewEdit{{ $row->id }}" style="display: none;">
                                                        @endif
                                                        <small class="form-text text-muted">
                                                            Ukuran maksimal 10MB. Format file: jpeg, png, jpg, gif.
                                                        </small>
                                                    </div>

                                                    <hr>

                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="resetForm('editLayananForm{{ $row->id }}')">Batal</button>
                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Form Hapus Data -->
                                <div class="modal fade" id="formModalDeleteLayanan{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-gray-800" id="exampleModalLabel">Hapus Data Bahan</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah Anda yakin ingin menghapus data yang dipilih ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('layanan.destroy', ['slug' => $row->slug]) }}" method="POST">
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
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Data Layanan-->
        <div class="modal fade" id="formModalTambahLayanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-gray-800" id="exampleModalLabel">Tambah Data Layanan</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- content modal -->
                        <form id="tambahLayananForm" action="{{ route('layanan.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group text-gray-800">
                                <label for="exampleInputPassword1">Judul (layanan)</label>
                                <input type="text" class="form-control" id="nama_layanan" name="nama_layanan" placeholder="Masukkan nama layanan" required>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="foto_layanan">Gambar</label>
                                <input type="file" class="form-control-file" id="foto_layanan" name="foto_layanan" onchange="previewImage(event, 'previewTambah')" required>
                                <img src="" alt="Preview" class="img-thumbnail mt-2" width="150" id="previewTambah" style="display: none;">
                                <small class="form-text text-muted">
                                    Ukuran maksimal 10MB. Format file: jpeg, png, jpg, gif.
                                </small>
                            </div>

                            <hr></hr>

                            <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="resetForm('tambahLayananForm')">Batal</button>
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
                var previewImage = document.getElementById('previewTambah');
                previewImage.src = '';
                previewImage.style.display = 'none';
            }

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