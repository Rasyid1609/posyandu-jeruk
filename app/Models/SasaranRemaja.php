<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SasaranRemaja extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'umur',
        'tanggal_lahir',
        'tinggi_badan',
        'berat_badan',
        'imt',
        'lingkar_perut',
        'tekanan_darah',
        'gula_darah',
        'hemogoblin',
    ];
}
