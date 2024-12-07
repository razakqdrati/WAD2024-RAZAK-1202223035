<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    /** @use HasFactory<\Database\Factories\MahasiswasFactory> */
    use HasFactory;
    protected $table = 'mahasiswas';

    protected $fillable = [
        'id',
        'nim',
        'nama_mahasiswa',
        'email',
        'jurusan',
        'dosen_id',
    ];

    public function dosen() {
        return $this->belongsTo(Dosen::class);
    }
}
