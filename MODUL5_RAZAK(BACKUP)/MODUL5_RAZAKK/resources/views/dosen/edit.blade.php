@extends('layouts.app')

@section('content')
    <h1>Edit Dosen</h1>
    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Kode Dosen" class="form-label">Kode Dosen</label>
            <input type="text" class="form-control" name="kode_dosen" id="kode_dosen" value="{{ $dosen->kode_dosen }}" required>
        </div>
        <div class="mb-3">
            <label for="nama_dosen" class="form-label">Nama Dosen</label>
            <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="{{ $dosen->nama_dosen }}" required>
        </div>
        <div class="mb-3">
            <label for="NIP" class="form-label">NIP</label>
            <input type="text" class="form-control" name="nip" id="nip" value="{{ $dosen->nip }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $dosen->email }}" required>
        </div>
        <div class="mb-3">
            <label for="Nomor Telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="no_telepon" id="no_telepon" value="{{ $dosen->no_telepon }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
@endsection
