<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    /** @use HasFactory<\Database\Factories\DosensFactory> */
    use HasFactory;

    protected $table = 'dosens';

    protected $fillable = [
        'id',
        'kode_dosen',
        'nama_dosen',
        'nip',
        'email (unik)',
        'no_telepon',
    ];

    public function mahasiswa() {
        return $this->hasMany(Mahasiswa::class);
    }
}
