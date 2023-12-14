<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekeningKoran extends Model
{
    use HasFactory;

    protected $table = 'rekening_koran';

    protected $fillable = [
        'kode_satker',
        'nama_bank',
        'nomor_rekening',
        'tanggal',
        'bulan',
        'tahun',
        'tipe',
        'nominal',
        'keterangan',
        'status'
    ];

    public function scopeActivePersatker()
    {
        return $this->where([
            'kode_satker' => auth()->user()->kode_satker,
            'status' => '0'
        ]);
    }
}
