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
        Schema::create('transaksi_pemeriksaan', function (Blueprint $table) {
            $table->id("nomorPemeriksaan");
            $table->foreignId("nomorPendaftaran")->constrained("pendaftaran_pemeriksaan",'nomorPendaftaran');
            $table->foreignId("idKaryawanRadiografer")->constrained("karyawan",'idKaryawan');
            $table->foreignId("idKaryawanDokterRadiologi")->constrained("karyawan",'idKaryawan');
            $table->string("namaDokterPengirim",length: 50);
            $table->date("tanggalPemeriksaan");
            $table->text("diagnosis");
            $table->text("keterangan");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_pemeriksaan');
    }
};
