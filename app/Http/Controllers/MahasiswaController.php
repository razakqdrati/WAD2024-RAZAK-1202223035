<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::with('dosen')->get();
        $nav = 'List Data Mahasiswa';

        return view('daftarmahasiswa', compact('mahasiswas','nav'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = 'Tambah data Mahasiswa';
        $dosens = Dosen::all();
        return view('mahasiswa.create', compact('dosens', 'nav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|string|max:25',
            'nama_mahasiswa' => 'required|string|max:100',
            'email' => 'required|string|max:50',
            'jurusan' => 'required|string|max:50',
            'dosen_id' => 'required|integer|max:25',
        ]);

        Mahasiswa::create($validatedData);

        return redirect()->route('daftarmahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswas)
    {
        $nav = 'Detail Mahasiswa - ' . $mahasiswas->nama_mahasiswa;
        return view('mahasiswa.show', compact('mahasiswa', 'nav'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $nav = 'Edit data mahasiswa - ' . $mahasiswa->nama_mahasiswa;
        return view('mahasiswa.edit', compact('mahasiswa', 'nav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validatedData = $request->validate([
            'nim' => 'required|string|max:25',
            'nama_mahasiswa' => 'required|string|max:100',
            'email' => 'required|string|max:50',
            'jurusan' => 'required|string|max:50',
            'dosen_id' => 'required|integer|max:25',
        ]);

        $mahasiswa->update($validatedData);

        return redirect()->route('daftarmahasiswa')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('daftarmahasiswa')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
