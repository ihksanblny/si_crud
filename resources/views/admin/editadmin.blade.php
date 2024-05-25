@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Data Admin</div>
                    <div class="card-body">
                        <form action="{{ route('admin.update', $min->id_admin) }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="nama" class="form-label">Nama <span>*</span></label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Masukkan nama" value="{{ $min->nama }}">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Email <span>*</span></label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Masukkan email" value="{{ $min->email }}">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password <span>*</span></label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Masukkan password" value="{{ $min->password }}">
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
