<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Modalitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaModalitas',
        'jenisModalitas',
        'merekModalitas',
        'tiperModalitas',
        'nomorSeriModalitas',
        'alamatIp',
        'kodeRuang',
    ];

    public function master_dicom(): HasOne
    {
        return $this->hasOne(master_dicom::class);
    }
}
