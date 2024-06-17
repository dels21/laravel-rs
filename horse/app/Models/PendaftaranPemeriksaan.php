<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranPemeriksaan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'pendaftaran_pemeriksaan';

    public function user()
    {
        return $this->belongsTo(User::class, 'idPasien');
    }

    // Define the relationship to TransaksiPemeriksaan
    public function transaksiPemeriksaans()
    {
        return $this->hasMany(TransaksiPemeriksaan::class, 'nomorPendaftaran');
    }
}
