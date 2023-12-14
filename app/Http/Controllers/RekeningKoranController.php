<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\BukuKasUmum;
use Illuminate\Http\Request;
use App\Models\RekeningKoran;

class RekeningKoranController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = RekeningKoran::activePersatker()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $proses = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="btn btn-primary btn-sm" id="proses">Proses</a>';
                        $button = $proses;
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('rekening_koran');
    }

    public function show(RekeningKoran $rekeningKoran)
    {
        return response()->json($rekeningKoran);
    }

    public function update(Request $request, RekeningKoran $rekeningKoran)
    {
        BukuKasUmum::create([
            'kode_satker' => $rekeningKoran->kode_satker,
            'nama_bank' => $rekeningKoran->nama_bank,
            'nomor_rekening' => $rekeningKoran->nomor_rekening,
            'tanggal' => $rekeningKoran->tanggal,
            'bulan' => $rekeningKoran->bulan,
            'tahun' => $rekeningKoran->tahun,
            'tipe' => $rekeningKoran->tipe,
            'jenis' => 'Uang Jaminan Lelang',
            'kode' => '11',
            'debet' => $rekeningKoran->nominal,
            'kredit' => '0',
            'keterangan' => $rekeningKoran->keterangan,
        ]);

        $rekeningKoran->fill($request->post())->save();

        return response()->json($request);
    }
}

