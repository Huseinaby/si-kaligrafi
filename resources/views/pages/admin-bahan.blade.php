@extends('layouts/admin/admin-dashboard')

@section('title', 'Bahan')

@section('dashboard-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Bahan</h1>

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
            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formModalTambahBahan"><i
                    class="fas fa-plus"></i> Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Jenis Bahan</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin_bahan as $row)
                            <tr>
                                <td>{{ $row->nama_bahan }}</td>
                                <td>{{ $row->jenis_bahan }}</td>
                                <td>{{ $row->deskripsi_bahan }}</td>
                                <td><img src="{{ asset('storage/storage/' . $row->foto_bahan) }}" alt="Gambar Bahan"
                                        width="100"></td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#formModalEditBahan{{ $row->id }}"><i class="fas fa-edit"></i>
                                        Edit</a>
                                    <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#formModalDeleteBahan{{ $row->id }}"><i class="fas fa-trash"></i>
                                        Hapus</a>
                                </td>
                            </tr>

                            <!-- Modal Edit Data Bahan-->
                            <div class="modal fade" id="formModalEditBahan{{ $row->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-gray-800" id="exampleModalLabel">Edit Data Bahan
                                            </h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="editBahanForm{{ $row->id }}"
                                                action="{{ route('bahan.update', ['slug' => $row->slug]) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="form-group text-gray-800">
                                                    <label for="nama_bahan">Judul</label>
                                                    <input type="text" class="form-control" id="nama_bahan"
                                                        name="nama_bahan" value="{{ old('nama_bahan', $row->nama_bahan) }}"
                                                        required>
                                                </div>

                                                <div class="form-group text-gray-800">
                                                    <label for="jenis_bahan">Jenis Bahan</label>
                                                    <input type="text" class="form-control" id="jenis_bahan"
                                                        name="jenis_bahan"
                                                        value="{{ old('jenis_bahan', $row->jenis_bahan) }}" required>
                                                </div>

                                                <div class="form-group text-gray-800">
                                                    <label for="deskripsi_bahan">Deskripsi Bahan</label>
                                                    <textarea class="form-control" id="deskripsi_bahan" name="deskripsi_bahan" rows="3" required>{{ old('deskripsi_bahan', $row->deskripsi_bahan) }}</textarea>
                                                </div>

                                                <div class="form-group text-gray-800">
                                                    <label for="foto_bahan">Gambar</label>
                                                    <input type="hidden" name="oldImage" value="{{ $row->foto_bahan }}">
                                                    <input type="file" class="form-control-file" id="foto_bahan" name="foto_bahan" onchange="previewImage(event, 'previewEdit{{ $row->id }}')">
                                                    @if ($row->foto_bahan)
                                                        <img src="{{ asset('storage/storage/' . $row->foto_bahan) }}" alt="{{ $row->nama_bahan }}" class="img-thumbnail mt-2" width="150" id="previewEdit{{ $row->id }}">
                                                    @else
                                                        <img src="" alt="Preview" class="img-thumbnail mt-2" width="150" id="previewEdit{{ $row->id }}" style="display: none;">
                                                    @endif
                                                    <small class="form-text text-muted">
                                                        Ukuran maksimal 10MB. Format file: jpeg, png, jpg, gif.
                                                    </small>
                                                </div>

                                                <hr>

                                                <button class="btn btn-secondary" type="button" data-dismiss="modal"
                                                    onclick="resetForm('editBahanForm{{ $row->id }}')">Batal</button>
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                                                    Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Form Hapus Data -->
                            <div class="modal fade" id="formModalDeleteBahan{{ $row->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-gray-800" id="exampleModalLabel">Hapus Data Bahan
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
                                            <form action="{{ route('bahan.destroy', ['slug' => $row->slug]) }}"
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

    <!-- Modal Tambah Data Bahan-->
    <div class="modal fade" id="formModalTambahBahan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-gray-800" id="exampleModalLabel">Tambah Data Bahan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- content modal -->
                    <form id="tambahBahanForm" action="{{ route('bahan.store') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        <div class="form-group text-gray-800">
                            <label for="exampleInputPassword1">Judul</label>
                            <input type="text" class="form-control" id="nama_bahan" name="nama_bahan"
                                placeholder="Masukkan nama bahan" required>
                        </div>

                        <div class="form-group text-gray-800">
                            <label for="exampleInputPassword1">Jenis Bahan</label>
                            <input type="text" class="form-control" id="jenis_bahan" name="jenis_bahan"
                                placeholder="Masukkan jenis bahan" required>
                        </div>

                        <div class="form-group text-gray-800">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi_bahan" name="deskripsi_bahan" rows="3"
                                placeholder="Masukkan deskripsi bahan" required></textarea>
                        </div>

                        <div class="form-group text-gray-800">
                            <label for="foto_bahan">Gambar</label>
                            <input type="file" class="form-control-file" id="foto_bahan" name="foto_bahan" onchange="previewImage(event, 'previewTambah')" required>
                            <img src="" alt="Preview" class="img-thumbnail mt-2" width="150" id="previewTambah" style="display: none;">
                            <small class="form-text text-muted">
                                Ukuran maksimal 10MB. Format file: jpeg, png, jpg, gif.
                            </small>
                        </div>

                        <hr>
                        </hr>

                        <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="resetForm('tambahBahanForm')">Batal</button>
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
