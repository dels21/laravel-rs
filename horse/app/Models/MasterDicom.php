<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDicom extends Model
{
    use HasFactory;

    protected $fillable = [
        'netMask',
        'layananDicom',
        'peran',
        'aet',
        'port',
    ];

    protected $table = 'master_dicom';
    protected $primaryKey = 'alamatIp';
}
