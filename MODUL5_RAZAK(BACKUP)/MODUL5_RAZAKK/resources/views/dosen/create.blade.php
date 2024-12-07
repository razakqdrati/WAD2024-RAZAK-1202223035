@extends('layouts.app')

@section('content')
    <h1>Tambah Dosen</h1>
    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_dosen" class="form-label">Kode Dosen</label>
            <input type="text" class="form-control" name="kode_dosen" id="kode_dosen" required>
        </div>
        <div class="mb-3">
            <label for="nama_dosen" class="form-label">Nama Dosen</label>
            <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" required>
        </div>
        <div class="mb-3">
            <label for="nama_dosen" class="form-label">NIP</label>
            <input type="text" class="form-control" name="nip" id="nip" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="no_telepon" id="no_telepon" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
