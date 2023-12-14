<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefNomorNota extends Model
{
    use HasFactory;

    protected $table = 'ref_nomor_nota';
    protected $fillable = [
        'kode_satker',
        'nomor',
    ];
}
