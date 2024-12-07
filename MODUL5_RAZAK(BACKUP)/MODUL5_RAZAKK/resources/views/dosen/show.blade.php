@extends('layouts.app')

@section('content')
    <h1>Detail Dosen</h1>
    <p><strong>Kode Dosen:</strong> {{ $dosen->kode_dosen }}</p>
    <p><strong>Nama Dosen:</strong> {{ $dosen->nama_dosen }}</p>
    <p><strong>NIP:</strong> {{ $dosen->nip }}</p>
    <p><strong>Email:</strong> {{ $dosen->email }}</p>
    <p><strong>Nomor Telepon:</strong> {{ $dosen->no_telepon }}</p>
    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
