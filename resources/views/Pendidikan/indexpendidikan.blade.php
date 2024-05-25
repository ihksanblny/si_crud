@extends('layouts.app') 
@section('content')
<div class="container">
    <h1>Data Pendidikan</h1>
    <a href="{{ route('creatependidikan') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <a href="{{ route('pendidikan.cetak_pdf') }}" class="btn btn-success mb-3">Export</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Institusi</th>
                <th>Jenjang</th>
                <th>Jurusan</th>
                <th>Tahun Masuk</th>
                <th>Tahun Lulus</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendidikans as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_institusi }}</td>
                    <td>{{ $item->jenjang }}</td>
                    <td>{{ $item->jurusan }}</td>
                    <td>{{ $item->tahun_masuk }}</td>
                    <td>{{ $item->tahun_lulus }}</td>
                    <td>
                        <a href="{{ route('pendidikan.edit', $item->id_pendidikan) }}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{ route('pendidikan.hapus', $item->id_pendidikan) }}" class="btn icon btn-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash-alt"></i></i></a>
                        <!-- <form action="{{ route('admin.hapus', $item->id_pendidikan) }}" method="POST" class="d-inline">
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