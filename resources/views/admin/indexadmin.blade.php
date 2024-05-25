@extends('layouts.app') 
@section('content')
<div class="container">
    <h1>Admin</h1>
    <a href="{{ route('createadmin') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <a href="{{ route('admin.cetak_pdf') }}" class="btn btn-success mb-3">Export</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $min)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $min->nama }}</td>
                    <td>{{ $min->email }}</td>
                    <td>{{ $min->password }}</td>
                    <td>
                        <a href="{{ route('admin.edit', $min->id_admin) }}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{ route('admin.hapus', $min->id_admin) }}" class="btn icon btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash-alt"></i></i></a>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection