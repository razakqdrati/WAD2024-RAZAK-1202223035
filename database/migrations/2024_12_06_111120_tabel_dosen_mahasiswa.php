<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('kode_dosen');
            $table->string('nama_dosen');
            $table->string('nip');
            $table->string('email (unik)');
            $table->string('no_telepon');
        }) ;

        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama_mahasiswa');
            $table->string('email');
            $table->string('jurusan');
            $table->integer('dosen_id');
        }) ;        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
