@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Karyawan</div>
                    <div class="card-body">
                        <form action="{{ route('karyawan.store') }}" method="POST">
                            @csrf
                            <!-- <label for="id_admin">Admin</label>
                            <select id="id_admin" name="id_admin" required>
                                @foreach($admins as $admin)
                                <option value="{{ $admin->id_admin }}">{{ $admin->id_admin }}</option>
                                @endforeach
                            </select> -->
                            <label for="id_pendidikan">Pendidikan</label>
                            <select id="id_pendidikan" name="id_pendidikan" required>
                                @foreach($pendidikans as $pendidikan)
                                <option value="{{ $pendidikan->id_pendidikan }}">{{ $pendidikan->nama_institusi }}</option>
                                @endforeach
                            </select>

                            <div class="mb-4">
                                <label for="nama" class="form-label">Nama <span>*</span></label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Masukkan nama" required>
                            </div>
                            <div class="mb-4">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span>*</span></label>
                                <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin"
                                    placeholder="Masukkan jenis kelamin" required>
                            </div>
                            <div class="mb-4">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span>*</span></label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                                    placeholder="Masukkan tanggal lahir" required>
                            </div>
                            <div class="mb-4">
                                <label for="alamat" class="form-label">Alamat <span>*</span></label>
                                <input type="text" class="form-control" name="alamat" id="alamat"
                                    placeholder="Masukkan alamat" required>
                            </div>
                            <div class="mb-4">
                                <label for="no_hp" class="form-label">No Hp <span>*</span></label>
                                <input type="text" class="form-control" name="no_hp" id="no_hp"
                                    placeholder="Masukkan Nomor Handphone" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Email <span>*</span></label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Masukkan Email" required>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="button" onclick="history.back()" class="btn btn-secondary">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
