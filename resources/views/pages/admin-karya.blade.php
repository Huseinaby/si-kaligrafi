@extends('layouts/admin/admin-dashboard')

@section('title', 'Karya')

@section('dashboard-content')

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Karya</h1>

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
                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formModalTambahKarya"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Nama Mesjid</th>
                                <th>Lokasi</th>
                                <th>Jenis Karya</th>
                                <th>Jenis Ornamen</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Tanggal Pembuatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin_karya as $row)
                                <tr>
                                    <td>{{ $row->nama_karya }}</td>
                                    <td>{{ $row->nama_masjid }}</td>
                                    <td>{{ $row->lokasi }}</td>
                                    <td>{{ $row->jenis_karya }}</td>
                                    <td>{{ $row->ornamen->jenis_ornamen }}</td>
                                    <td>{{ $row->deskripsi_karya }}</td>
                                    <td><img src="{{ asset('storage/storage/' . $row->foto_karya) }}" alt="Gambar karya" width="100"></td>
                                    <td>{{ $row->tgl_pembuatan }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#formModalEditKarya{{ $row->id }}"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#formModalDeleteKarya{{ $row->id }}"><i class="fas fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>

                                <!-- Modal Edit Data -->
                                <div class="modal fade" id="formModalEditKarya{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-gray-800" id="exampleModalLabel">Edit Data Karya</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <!-- content modal -->
                                                <form id="editKaryaForm" action="{{ route('karya.update', ['slug' => $row->slug]) }}" enctype="multipart/form-data" method="POST">
                                                    @csrf
                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleInputPassword1">Nama Karya</label>
                                                        <input type="text" class="form-control" id="nama_karya" name="nama_karya" placeholder="Masukkan nama karya" value="{{ old('nama_karya', $row->nama_karya) }}" required>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleInputPassword1">Nama Mesjid</label>
                                                        <input type="text" class="form-control" id="nama_masjid" name="nama_masjid" placeholder="Masukkan nama mesjid" value="{{ old('nama_masjid', $row->nama_masjid) }}" required>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleFormControlTextarea1">Lokasi</label>
                                                        <textarea class="form-control" id="lokasi" name="lokasi" rows="3" placeholder="Masukkan lokasi masjid" required>{{ old('lokasi', $row->lokasi) }}</textarea>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleInputPassword1">Jenis Karya</label>
                                                        <input type="text" class="form-control" id="jenis_karya" name="jenis_karya" placeholder="Masukkan jenis karya" value="{{ old('jenis_karya', $row->jenis_karya) }}" required>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleFormControlSelect1">Jenis Ornamen</label>
                                                        <select class="form-control" id="ornamen_id" name="ornamen_id">
                                                            <option value="">Pilih Jenis Ornamen</option>
                                                            @foreach($ornamen_list as $ornamen)
                                                                <option value="{{ $ornamen->id }}" {{ old('ornamen_id', $row->ornamen_id) == $ornamen->id ? 'selected' : '' }}>{{ $ornamen->jenis_ornamen }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                                                        <textarea class="form-control" id="deskripsi_karya" name="deskripsi_karya" rows="3" placeholder="Masukkan deskripsi karya" required>{{ old('deskripsi_karya', $row->deskripsi_karya) }}</textarea>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleFormControlFile1">Gambar</label>
                                                        <input type="file" class="form-control-file" id="foto_karya" name="foto_karya" required>
                                                        <small class="form-text text-muted">
                                                            Ukuran maksimal 2MB. Format file: jpeg, png, jpg, gif.
                                                        </small>
                                                    </div>

                                                    <div class="form-group text-gray-800">
                                                        <label for="exampleFormControlFile1">Tahun Pembuatan</label>
                                                        <input type="date" class="form-control-file" id="tgl_pembuatan" name="tgl_pembuatan" value="{{ old('tgl_pembuatan', $row->tgl_pembuatan) }}" required>
                                                    </div>

                                                    <hr></hr>

                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="resetForm('editKaryaForm')">Batal</button>
                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Form Hapus Data -->
                                <div class="modal fade" id="formModalDeleteKarya{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-gray-800" id="exampleModalLabel">Hapus Data Karya</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah Anda yakin ingin menghapus data yang dipilih ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('karya.destroy', ['slug' => $row->slug]) }}" method="POST">
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

        <!-- Modal Tambah Data Karya-->
        <div class="modal fade" id="formModalTambahKarya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-gray-800" id="exampleModalLabel">Tambah Data Karya</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- content modal -->
                        <form id="tambahKaryaForm" action="{{ route('karya.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group text-gray-800">
                                <label for="exampleInputPassword1">Nama Karya</label>
                                <input type="text" class="form-control" id="nama_karya" name="nama_karya" placeholder="Masukkan nama karya" required>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleInputPassword1">Nama Mesjid</label>
                                <input type="text" class="form-control" id="nama_masjid" name="nama_masjid" placeholder="Masukkan nama mesjid" required>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleFormControlTextarea1">Lokasi</label>
                                <textarea class="form-control" id="lokasi" name="lokasi" rows="3" placeholder="Masukkan lokasi masjid" required></textarea>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleInputPassword1">Jenis Karya</label>
                                <input type="text" class="form-control" id="jenis_karya" name="jenis_karya" placeholder="Masukkan jenis karya" required>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleFormControlSelect1">Jenis Ornamen</label>
                                <select class="form-control" id="ornamen_id" name="ornamen_id">
                                    <option value="">Pilih Jenis Ornamen</option>
                                    @foreach($ornamen_list as $row)
                                        <option value="{{ $row->id }}">{{ $row->jenis_ornamen }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi_karya" name="deskripsi_karya" rows="3" placeholder="Masukkan deskripsi karya" required></textarea>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleFormControlFile1">Gambar</label>
                                <input type="file" class="form-control-file" id="foto_karya" name="foto_karya" required>
                                <small class="form-text text-muted">
                                    Ukuran maksimal 2MB. Format file: jpeg, png, jpg, gif.
                                </small>
                            </div>

                            <div class="form-group text-gray-800">
                                <label for="exampleFormControlFile1">Tahun Pembuatan</label>
                                <input type="date" class="form-control-file" id="tgl_pembuatan" name="tgl_pembuatan" required>
                            </div>

                            <hr></hr>

                            <button class="btn btn-secondary" type="button" data-dismiss="modal" onclick="resetForm('tambahKaryaForm')">Batal</button>
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