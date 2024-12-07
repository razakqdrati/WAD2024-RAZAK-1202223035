@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Dosen</h1>

        <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">Tambah Dosen</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode Dosen</th>
                    <th>Nama Dosen</th>
                    <th>NIP</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dosens as $dosen)
                    <tr>
                        <td>{{ $dosen->kode_dosen }}</td>
                        <td>{{ $dosen->nama_dosen }}</td>
                        <td>{{ $dosen->nip }}</td>
                        <td>{{ $dosen->email }}</td>
                        <td>{{ $dosen->no_telepon }}</td>
                        <td>
                            <a href="{{ route('dosen.show', $dosen->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
