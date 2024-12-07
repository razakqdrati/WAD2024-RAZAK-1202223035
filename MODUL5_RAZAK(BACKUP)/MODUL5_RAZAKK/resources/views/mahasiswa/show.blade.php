@extends('layouts.app')

@section('content')
    <h1>Detail Mahasiswa</h1>
    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama_mahasiswa }}</p>
    <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>
    <p><strong>Jurusan:</strong> {{ $mahasiswa->jurusan }}</p>
    <p><strong>Dosen:</strong> {{ $mahasiswa->dosen->nama_dosen }}</p>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
