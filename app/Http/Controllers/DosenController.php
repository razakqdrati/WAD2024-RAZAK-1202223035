<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        $nav = 'List Data Dosen';

        return view('daftardosen', compact('dosens','nav'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nav = 'Tambah data Dosen';
        return view('dosen.create', compact('nav'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_dosen' => 'required|string|max:50',
            'nama_dosen' => 'required|string|max:100',
            'nip' => 'required|string|max:25',
            'email (unik)' => 'required|string|max:50',
            'no_telepon' => 'required|string|max:25',
        ]);

        Dosen::create($validatedData);

        return redirect()->route('daftardosen')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosens)
    {
        $nav = 'Detail Dosen - ' . $dosens->nama_dosen;
        return view('dosen.show', compact('dosen', 'nav'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        $nav = 'Edit data dosen - ' . $dosen->nama_dosen;
        return view('dosen.edit', compact('dosen', 'nav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $validatedData = $request->validate([
            'kode_dosen' => 'required|string|max:50',
            'nama_dosen' => 'required|string|max:100',
            'nip' => 'required|string|max:25',
            'email (unik)' => 'required|string|max:50',
            'no_telepon' => 'required|string|max:25',
        ]);

        $dosen->update($validatedData);

        return redirect()->route('daftardosen')->with('success', 'Data dosen berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('daftardosen')->with('success', 'Data dosen berhasil dihapus!');
    }
}
