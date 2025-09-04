<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SasaranBayi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'umur',
        'tinggi_badan',
        'berat_badan',
        'panjang_badan',
        'lingkar_kepala',
        'status_bbu',
        'status_tbu',
        'status_bbtb',
        'LILA',
    ];
}
