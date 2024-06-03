<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class master_dicom extends Model
{
    use HasFactory;

    protected $fillable = [
        'netMask',
        'layananDicom',
        'peran',
        'aet',
        'port',
    ];
}
