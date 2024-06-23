@extends('layouts/admin/admin-dashboard')

@section('title', 'Ornamen')

@section('dashboard-content')

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ornamen</h1>

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
                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formModalTambahOrnamen"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Bahan Ornamen</th>
                                <th>Deskripsi</th>
                                <th>Jenis Ornamen</th>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin_ornamen as $row)
                                <tr>
                                    <td>{{ $row->nama_ornamen }}</td>
                                    <td>{{ $row->bahan->jenis_bahan }}</td>
                                    <td>{{ $row->deskripsi_ornamen }}</td>
                                    <td>{{ $row->jenis_ornamen }}</td>
                                    <td>{{ $row->kategori }}</td>
                                    <td><img src="{{ asset('storage/public/storage/' . $row->foto_ornamen) }}" alt="Gambar Ornamen" width="100"></td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#formModalEditOrnamen{{ $row->id }}"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#formModalDeleteOrnamen{{ $row->id }}"><i class="fas fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>

                                <!-- Modal Edit Data -->
                                <div class="modal fade" id="formModalEditOrnamen{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-gray-800" id="exampleModalLabel">Edit Data Ornamen</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <!-- content modal -->
                                                <form id="editOrnamenForm{{ $row->id }}" action="{{ route('ornamen.update', ['slug' => $row->slug]) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleInputPassword1">Judul</label>
                                                        <input type="text" class="form-control" id="nama_ornamen" name="nama_ornamen" value="{{ old('nama_ornamen', $row->nama_ornamen) }}" required>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleFormControlSelect1">Bahan Ornamen</label>
                                                        <select class="form-control" id="bahan_id" name="bahan_id">
                                                            <option value="">Pilih Bahan</option>
                                                            @foreach($bahan_list as $bahan)
                                                                <option value="{{ $bahan->id }}" {{ old('bahan_id', $row->bahan_id) == $bahan->id ? 'selected' : '' }}>{{ $bahan->jenis_bahan }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                                                        <textarea class="form-control" id="deskripsi_ornamen" name="deskripsi_ornamen" rows="3" required>{{ old('deskripsi_ornamen', $row->deskripsi_ornamen) }}</textarea>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleInputPassword1">Jenis Ornamen</label>
                                                        <input type="text" class="form-control" id="jenis_ornamen" name="jenis_ornamen" value="{{ old('jenis_ornamen', $row->jenis_ornamen) }}" required>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleInputPassword1">Kategori</label>
                                                        <input type="text" class="form-control" id="kategori" name="kategori" value="{{ old('kategori', $row->kategori) }}" required>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="foto_ornamen">Gambar</label>
                                                        <input type="hidden" name="oldImage" value="{{ $row->foto_ornamen }}">
                                                        <input type="file" class="form-control-file" id="foto_ornamen" name="foto_ornamen" onchange="previewImage(event, 'previewEdit{{ $row->id }}')">
                                                        @if ($row->foto_ornamen)
                                                            <img src="{{ asset('storage/public/storage/' . $row->foto_ornamen) }}" alt="{{ $row->nama_ornamen }}" class="img-thumbnail mt-2" width="150" id="previewEdit{{ $row->id }}">
                                                        @else
                                                            <img src="" alt="Preview" class="img-thumbnail mt-2" width="150" id="previewEdit{{ $row->id }}" style="display: none;">
                                                        @endif
                                                        <small class="form-text text-muted">
                                                            Ukuran maksimal 10MB. Format file: jpeg, png, jpg, gif.
                                                        </small>
                                                    </div>

                                                    <hr>

                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="resetForm('editOrnamenForm{{ $row->id }}')">Batal</button>
                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Form Hapus Data -->
                                <div class="modal fade" id="formModalDeleteOrnamen{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-gray-800" id="exampleModalLabel">Hapus Data Ornamen</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah Anda yakin ingin menghapus data yang dipilih ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('ornamen.destroy', ['slug' => $row->slug]) }}" method="POST">
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

        <!-- Modal Tambah Data Ornamen-->
        <div class="modal fade" id="formModalTambahOrnamen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-gray-800" id="exampleModalLabel">Tambah Data Ornamen</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- content modal -->
                        <form id="tambahOrnamenForm" action="{{ route('ornamen.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group text-gray-800">
                                <label for="exampleInputPassword1">Judul</label>
                                <input type="text" class="form-control" id="nama_ornamen" name="nama_ornamen" placeholder="Masukkan nama ornamen" required>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleFormControlSelect1">Bahan Ornamen</label>
                                <select class="form-control" id="bahan_id" name="bahan_id">
                                    <option value="">Pilih Bahan</option>
                                    @foreach($bahan_list as $row)
                                        <option value="{{ $row->id }}">{{ $row->jenis_bahan }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi_ornamen" name="deskripsi_ornamen" rows="3" placeholder="Masukkan deskripsi ornamen" required></textarea>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleInputPassword1">Jenis Ornamen</label>
                                <input type="text" class="form-control" id="jenis_ornamen" name="jenis_ornamen" placeholder="Masukkan jenis ornamen" required>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleInputPassword1">Kategori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan kategori" required>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" class="form-control-file" id="foto_ornamen" name="foto_ornamen" onchange="previewImage(event, 'previewTambah')" required>
                                <img src="" alt="Preview" class="img-thumbnail mt-2" width="150" id="previewTambah" style="display: none;">
                                <small class="form-text text-muted">
                                    Ukuran maksimal 10MB. Format file: jpeg, png, jpg, gif.
                                </small>
                            </div>

                            <hr></hr>

                            <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="resetForm('tambahOrnamenForm')">Batal</button>
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