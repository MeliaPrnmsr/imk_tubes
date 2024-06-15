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
        Schema::create('murid', function (Blueprint $table) {
            $table->id('kode_murid'); //kedepan nya tolong jadikan nomor induk 
            $table->string('nama_murid');
            $table->string('tempat_lahir'); 
            $table->date('tanggal_lahir');
            $table->string('nomor_telepon_rumah');
            $table->string('nama_orang_tua_wali');
            $table->string('pekerjaan_orang_tua'); //column baru
            $table->string('Pendidikan_terakhir');
            $table->string('foto')->nullable();
            $table->enum('sabuk', ['putih', 'kuning', 'hijau', 'biru', 'coklat', 'hitam',]);
            $table->enum('status', ['aktif', 'tidak aktif']);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('kode_dojo');
            $table->foreign('kode_dojo')->references('kode_dojo')->on('dojo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murid');
    }
};
