<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuKasUmum extends Model
{
    use HasFactory;

    protected $table = 'buku_kas_umum';
    protected $guarded = [];

    public function scopePersatker()
    {
        return $this->where('kode_satker', auth()->user()->kode_satker);
    }
}
