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
        Schema::create('pendaftaran_pemeriksaan', function (Blueprint $table) {
            $table->id('nomorPendaftaran');
            $table->foreignId('idPasien')->constrained('pasien');
            $table->string('namaDokterPengirim',length:50);
            // $table->
            $table->date('tanggalDaftar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_pemeriksaan');
    }
};
