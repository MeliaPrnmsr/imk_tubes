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
        Schema::create('interaksi', function (Blueprint $table) {
            $table->id('kode_interaksi');
            $table->unsignedBigInteger('users_id_1');
            $table->foreign('users_id_1')->references('id')->on('users');
            $table->unsignedBigInteger('users_id_2');
            $table->foreign('users_id_2')->references('id')->on('users');
            $table->text('isi_pesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interaksi');
    }
};
