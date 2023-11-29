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

    public function scopeLelangPersatker()
    {
        return $this->where([
            'kode_satker' => auth()->user()->kode_satker,
            'jenis_rekening' => 'RPL Lelang',
            'status_rekening' => 'Aktif'
        ]);
    }

    public function scopePiutangPersatker()
    {
        return $this->where([
            'kode_satker' => auth()->user()->kode_satker,
            'jenis_rekening' => 'RPL Piutang',
            'status_rekening' => 'Aktif'
        ]);
    }
}
