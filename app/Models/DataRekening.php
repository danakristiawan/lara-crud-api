<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataRekening extends Model
{
    protected $table = "data_rekening";
    // protected $fillable = ['kode_satker', 'bank', 'nomor', 'tanggal', 'tipe', 'nominal', 'uraian'];
    protected $guarded = [];

    public function scopePersatker()
    {
        return $this->where('kode_satker', auth()->user()->kode_satker);
    }
}
