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
        Schema::create('pelatih_dojo', function (Blueprint $table) {
            $table->unsignedBigInteger('kode_pelatih');
            $table->foreign('kode_pelatih')->references('kode_pelatih')->on('pelatih');
            $table->unsignedBigInteger('kode_dojo');
            $table->foreign('kode_dojo')->references('kode_dojo')->on('dojo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatih_dojo');
    }
};
