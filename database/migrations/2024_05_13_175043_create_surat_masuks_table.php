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
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kop')->references('id')->on('kepala_surats');
            $table->time('tanggal');
            $table->string('no_surat');
            $table->string('asal_surat');
            $table->string('perihal');
            $table->string('disp1');
            $table->string('disp2');
            $table->foreignId('id_tandatangan')->references('id')->on('nama_tandatangans');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuks');
    }
};
