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
        'berat_badan',
        'panjang_badan',
        'lingkar_kepala',
        'bbu',
        'status_bbu',
        'tbu',
        'status_tbu',
        'bbtb',
        'status_bbtb',
        'LILA',
    ];
}
