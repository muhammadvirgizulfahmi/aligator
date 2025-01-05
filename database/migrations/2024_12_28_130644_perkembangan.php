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
        Schema::create('perkembangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anak');
            $table->foreign('id_anak')->references('id')->on('anak');
            $table->date('tanggalUpdate');
            $table->integer('umur');
            $table->float('tinggiBadan');
            $table->float('beratBadan');
            $table->float('lingkarKepala');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkembangan');
    }
};