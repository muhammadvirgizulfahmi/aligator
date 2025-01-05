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
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anak');
            $table->unsignedBigInteger('id_wali');
            $table->unsignedBigInteger('id_dokter');
            $table->unsignedBigInteger('alamat_dokter');
            $table->foreign('id_anak')->references('id')->on('anak');
            $table->foreign('id_wali')->references('id')->on('users');
            $table->foreign('id_dokter')->references('id')->on('users');
            $table->foreign('alamat_dokter')->references('id')->on('users');
            $table->string('topik');
            $table->date('tanggal');
            $table->time('jam');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultasi');
    }
};
