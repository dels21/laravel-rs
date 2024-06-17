<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaranPemeriksaan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'pendaftaran_pemeriksaan';
    protected $primaryKey = 'nomorPendaftaran';

    public function user()
    {
        return $this->belongsTo(User::class, 'idPasien');
    }

    public function detailPendaftaran()
    {
        return $this->hasMany(DetailPendaftaranPemeriksaan::class, 'noPendaftaran', 'nomorPendaftaran');
    }
}
