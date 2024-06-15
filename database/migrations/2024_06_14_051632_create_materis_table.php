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
        Schema::create('materi', function (Blueprint $table) {
            $table->id('kode_materi');      
            // $table->enum('materi', ['kihon', 'kumite', 'kata']); // Enum can be used if needed
            $table->text('judul_materi')->nullable(); // ubah judul
            $table->string('judul_sub_materi');
            $table->string('deskripsi_materi');
            $table->enum('jenis_materi', ['kihon', 'kumite', 'kata']); // Enum can be used if needed
            $table->enum('sabuk', ['putih', 'kuning', 'hijau', 'biru', 'coklat', 'hitam',]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi');
    }
};
