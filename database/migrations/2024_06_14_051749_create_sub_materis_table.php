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
        Schema::create('sub_materi', function (Blueprint $table) {
            $table->id();
            $table->string('sub_materi');
            $table->string('link_youtube')->nullable();
            $table->text('isi_materi')->nullable();
            $table->string('foto')->nullable();
            $table->unsignedBigInteger('kode_materi');
            $table->foreign('kode_materi')->references('kode_materi')->on('materi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_materi');
    }
};
