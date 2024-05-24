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
        Schema::create('detail_pendaftaran', function (Blueprint $table) {
            $table->id("idDetailPendaftaranPemeriksaan");
            $table->foreignId("noPendaftaran")->constrained("pendaftaran_pemeriksaan");
            $table->foreignId("kodeJenisPemeriksaan")->constrained("master_jenis_pemeriksaan");
            $table->foreignId("kodeModalitas")->constrained("master_modalitas");
            $table->date("tanggalPendaftaranPemeriksaan");
            $table->time("jamMulai");
            $table->time("jamSelesai");
            $table->enum("statusKetersediaan", ["approve","reject"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pendaftaran');
    }
};
