@extends('layouts/admin/admin-dashboard')

@section('title', 'Pesanan')

@section('dashboard-content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Daftar Pesanan</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formModalTambahKarya"><i
                class="fas fa-plus"></i> Tambah</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Akun (Username)</th>
                        <th>Pesanan (Karya)</th>
                        <th>Nama Masjid</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($karyas as $karya)
                        @foreach ($karya->user as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $karya->nama_karya }}</td>
                                <td>{{ $karya->nama_masjid }}</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#formModalEditPesanan{{ $user->id_user }}{{ $karya->id }}"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#formModalDeletePesanan{{ $user->id_user }}{{ $karya->id }}"><i class="fas fa-trash"></i> Hapus</a>
                                </td>
                            </tr>

                            <div class="modal fade" id="formModalDeletePesanan{{ $user->id_user }}{{ $karya->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-gray-800" id="exampleModalLabel">Hapus Data Pesanan</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin ingin menghapus Pesanan yang dipilih ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="/pesanan/{{ $user->id_user }}/{{ $karya->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="formModalEditPesanan{{ $user->id_user }}{{ $karya->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-gray-800" id="exampleModalLabel">Edit Data Pesanan</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="EditPesananForm" method="post" action="/pesanan/{{ $user->id_user }}/{{ $karya->id }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group text-gray-800">
                                                    <label for="new_user_id">Username Pelanggan</label>
                                                    <select class="form-control" id="new_user_id" name="new_user_id">
                                                        @foreach ($users as $u)
                                                            <option value="{{ $u->id_user }}" @if($u->id_user == $user->id_user) selected @endif>{{ $u->username }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group text-gray-800">
                                                    <label for="new_karya_id">Nama Karya</label>
                                                    <select class="form-control" id="new_karya_id" name="new_karya_id">
                                                        @foreach ($karyas as $k)
                                                            <option value="{{ $k->id }}" @if($k->id == $karya->id) selected @endif>{{ $k->nama_karya }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                        
                                                <hr>
                        
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah Data Karya -->
<div class="modal fade" id="formModalTambahKarya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form method="post" action="{{ route('addPesanan') }}">
                    @csrf
                    <div class="form-group text-gray-800">
                        <label for="user">Username Pelanggan</label>
                        <select class="form-control" id="user" name="id_user">
                            @foreach ($users as $user)
                                <option value="{{ $user->id_user }}">{{ $user->username }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group text-gray-800">
                        <label for="karya">Nama Karya</label>
                        <select class="form-control" id="karya" name="karya_id">
                            @foreach ($karyas as $karya)
                                <option value="{{ $karya->id }}">{{ $karya->nama_karya }}</option>
                            @endforeach
                        </select>
                    </div>

                    <hr>

                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </form>
                <!-- End content -->

            </div>
            <!-- <div class="modal-footer"></div> -->
        </div>
    </div>
</div>

@endsection