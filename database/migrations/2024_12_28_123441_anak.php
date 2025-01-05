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
        Schema::create('anak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_wali');
            $table->foreign('id_wali')->references('id')->on('users');
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->enum('jenisKelamin', ['Laki-laki', 'Perempuan']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak');
    }
};
