@extends('layouts/admin/admin-dashboard')

@section('title', 'Kaligrafi | User Management')

@section('dashboard-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">User Management</h1>

    @error('password')
        <div class="alert alert-danger alert-dismissible fade show animate__animated animate__fadeInDown" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @enderror

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
            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formModalTambahUser"><i
                    class="fas fa-plus"></i> Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admin_user as $row)
                            <tr>
                                <td>{{ $row->username }}</td>
                                <td>{{ $row->nama_lengkap }}</td>
                                <td>{{ $row->level == 1 ? 'Admin' : 'User' }}</td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#formModalEditUser{{ $row->id_user }}"><i class="fas fa-edit"></i>
                                        Edit</a>
                                    <a href="" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#formModalDeleteUser{{ $row->id_user }}"><i class="fas fa-trash"></i>
                                        Hapus</a>
                                </td>
                            </tr>

                            <!-- Modal Edit Data User-->
                            <div class="modal fade" id="formModalEditUser{{ $row->id_user }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-gray-800" id="exampleModalLabel">Edit Data User</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="editUserForm{{ $row->id_user }}"
                                                action="{{ route('user.update', ['id' => $row->id_user]) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group text-gray-800">
                                                    <label for="nama_lengkap">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="nama_lengkap"
                                                        name="nama_lengkap"
                                                        value="{{ old('nama_lengkap', $row->nama_lengkap) }}" required>
                                                </div>

                                                <div class="form-group text-gray-800">
                                                    <label for="password">Password</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control"
                                                            id="password-edit{{ $row->id_user }}" name="password"
                                                            placeholder="Panjang password minimal 8 karakter">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-outline-secondary" type="button"
                                                                onclick="togglePassword('password-edit{{ $row->id_user }}', 'toggleIcon-edit{{ $row->id_user }}')">
                                                                <i class="fas fa-eye"
                                                                    id="toggleIcon-edit{{ $row->id_user }}"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group text-gray-800">
                                                    <label for="level">Level User</label>
                                                    <select class="form-control" id="level" name="level">
                                                        <option value="">Pilih level user</option>
                                                        <option value="1" {{ $row->level == 1 ? 'selected' : '' }}>
                                                            Admin</option>
                                                        <option value="2" {{ $row->level == 2 ? 'selected' : '' }}>
                                                            User</option>
                                                    </select>
                                                </div>

                                                <hr>
                                                </hr>

                                                <button class="btn btn-secondary" type="button" data-dismiss="modal"
                                                    onclick="resetForm('editUserForm{{ $row->id_user }}')">Batal</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fas fa-save"></i> Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Form Modal Delete User -->
                            <div class="modal fade" id="formModalDeleteUser{{ $row->id_user }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-gray-800" id="exampleModalLabel">Hapus Data User
                                            </h5>
                                            <button class="close" type="button" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin ingin menghapus user
                                                <strong>{{ $row->username }}</strong>?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('user.destroy', $row->id_user) }}" method="POST">
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

    <!-- Modal Tambah Data User-->
    <div class="modal fade" id="formModalTambahUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-gray-800" id="exampleModalLabel">Tambah Data User</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- content modal -->
                    <form id="tambahUserForm" action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="form-group text-gray-800">
                            <label for="exampleInputPassword1">Username</label>
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Masukkan username" required>
                        </div>

                        <div class="form-group text-gray-800">
                            <label for="exampleInputPassword1">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                placeholder="Masukkan nama lengkap" required>
                        </div>

                        <div class="form-group text-gray-800">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password-tambah" name="password"
                                    placeholder="Panjang password minimal 8 karakter" required>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePassword('password-tambah', 'toggleIcon-tambah')">
                                        <i class="fas fa-eye" id="toggleIcon-tambah"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-gray-800">
                            <label for="exampleFormControlSelect1">Level User</label>
                            <select class="form-control" id="level" name="level">
                                <option value="">Pilih level user</option>
                                <option value="1">Admin</option>
                                <option value="2">User</option>
                            </select>
                        </div>

                        <hr>
                        </hr>

                        <button class="btn btn-secondary" type="button" data-dismiss="modal"
                            onclick="resetForm('tambahUserForm')">Batal</button>
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

        function togglePassword(inputId, toggleIconId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = document.getElementById(toggleIconId);

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>

@endsection
