<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferensiBank extends Model
{
    protected $table = "referensi_bank";
    protected $fillable = [
            'kode_satker',
            'nama_satker',
            'nomor_rekening',
            'uraian_rekening',
            'jenis_rekening',
            'nama_bank',
            'surat_izin',
            'tanggal_surat',
            'status_rekening',
    ];
}
