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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_murid');
            $table->string('email')->unique();
            $table->date('tanggal_lahir');
            $table->string('nomor_telepon_rumah');
            $table->string('nama_orang_tua_wali');
            $table->string('pekerjaan_orang_tua'); //column baru
            $table->string('Pendidikan_terakhir');
            $table->enum('sabuk_terakhir', ['belum_pernah','putih', 'kuning', 'hijau', 'biru', 'coklat', 'hitam',])->nullable(); //nuabll
            $table->string('foto')->nullable(); //nuabll
            $table->string('dojo_terakhir')->nullable();
            $table->string('perguruan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
