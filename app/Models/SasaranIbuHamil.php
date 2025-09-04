<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SasaranIbuHamil extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'umur',
        'tinggi_badan',
        'berat_badan',
        'lingkar_lengan_atas',
        'tekanan_darah',
    ];
}
