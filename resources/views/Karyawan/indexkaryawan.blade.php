@extends('layouts.app') 
@section('content')
<div class="container">
    <h1>Data Pendidikan</h1>
    <a href="{{ route('createkaryawan') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <a href="{{ route('pendidikan.cetak_pdf') }}" class="btn btn-success mb-3">Export</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Institusi</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($karyawans as $pekerja)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pekerja->pendidikans->nama_institusi }}</td>
                    <td>{{ $pekerja->nama }}</td>
                    <td>{{ $pekerja->jenis_kelamin }}</td>
                    <td>{{ $pekerja->tanggal_lahir }}</td>
                    <td>{{ $pekerja->alamat }}</td>
                    <td>{{ $pekerja->no_hp }}</td>
                    <td>{{ $pekerja->email }}</td>
                    <td>
                        <a href="{{ route('pendidikan.edit', $item->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{ route('admin.hapus', $item->id) }}" class="btn icon btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash-alt"></i></i></a>
                        <!-- <form action="{{ route('admin.hapus', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form> -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection