<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPemeriksaan extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'nomorPendaftaran',
        'idKaryawanRadiografer',
        'idKaryawanRadiologi',
        'namaDokterPengirim',
        'tanggalPemeriksaan',
        'diagnosis',
        'keterangan',
    ];

    protected $table = 'transaksi_pemeriksaan';
    protected $primaryKey = 'nomorPemeriksaan';
}
