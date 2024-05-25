@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Data Pendidikan</div>
                    <div class="card-body">
                        <form action="{{ route('pendidikan.update', $item->id_pendidikan) }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="nama_institusi" class="form-label">Institusi <span>*</span></label>
                                <input type="text" class="form-control" name="nama_institusi" id="nama_institusi"
                                    placeholder="Masukkan nama institusi" value="{{ $item->nama_institusi }}">
                            </div>
                            <div class="mb-4">
                                <label for="jenjang" class="form-label">Jenjang <span>*</span></label>
                                <input type="text" class="form-control" name="jenjang" id="jenjang"
                                    placeholder="Masukkan jenjang" value="{{ $item->jenjang }}">
                            </div>
                            <div class="mb-4">
                                <label for="jurusan" class="form-label">Jurusan <span>*</span></label>
                                <input type="text" class="form-control" name="jurusan" id="jurusan"
                                    placeholder="Masukkan jurusan" value="{{ $item->jurusan }}">
                            </div>
                            <div class="mb-4">
                                <label for="tahun_masuk" class="form-label">Tahun Masuk <span>*</span></label>
                                <input type="date" class="form-control" name="tahun_masuk" id="tahun_masuk"
                                    placeholder="Masukkan tahun masuk" value="{{ $item->tahun_masuk }}">
                            </div>
                            <div class="mb-4">
                                <label for="tahun_lulus" class="form-label">Tahun Lulus <span>*</span></label>
                                <input type="date" class="form-control" name="tahun_lulus" id="tahun_lulus"
                                    placeholder="Masukkan tahun lulus" value="{{ $item->tahun_lulus }}">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" onclick="history.back()" class="btn btn-secondary">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
