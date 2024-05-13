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
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kop')->references('id')->on('kepala_surats');
            $table->date('tanggal');
            $table->string('no_surat');
            $table->string('perihal');
            $table->string('tujuan');
            $table->text('isi_surat');
            $table->foreignId('id_tandatangan')->references('id')->on('nama_tandatangans');
            $table->foreignId('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluars');
    }
};
