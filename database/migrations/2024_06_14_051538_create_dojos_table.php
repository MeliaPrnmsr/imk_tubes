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
        Schema::create('dojo', function (Blueprint $table) {
            $table->id('kode_dojo');
            $table->string('nama_dojo');
            $table->text('alamat_dojo');
            $table->string('pengcab');
            $table->date('tanggal_berdiri'); //nullable
            $table->enum('status', ['aktif', 'tidak aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dojo');
    }
};
