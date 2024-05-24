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
        Schema::create('master_modalitas', function (Blueprint $table) {
            $table->id("kodeModalitas");
            $table->string("namaModalitas",length:50);
            $table->enum('jenisModalitas',array('CT Scan', 'Radiografi', 'Fluoroskopi', 'Angiografi', 'Mamografi', 'USG', 'MRI'));
            $table->string("merekModalitas",length:50);
            $table->string("tipeModalitas",length:50);
            $table->string("nomorSeriModalitas",length:50);
            $table->foreign('alamatIp')->references('alamatIp')->on('master_dicom');
            $table->string("kodeRuang",length:20);
            // $table->enum('status',array());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_modalitas');
    }
};
