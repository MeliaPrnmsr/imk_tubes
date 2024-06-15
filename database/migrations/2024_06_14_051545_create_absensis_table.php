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
        Schema::create('absensi', function (Blueprint $table) {
            $table->id('kode_absensi');
            $table->unsignedBigInteger('kode_murid');
            $table->foreign('kode_murid')->references('kode_murid')->on('murid');
            $table->date('tanggal_absensi');
            $table->enum('status_kehadiran', ['hadir', 'tidak hadir']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};
