<?php

namespace App\Http\Controllers;

use App\Models\ReferensiBank;
use Illuminate\Http\Request;
use DataTables;
// use Yajra\DataTables\Facades\DataTables;

class ReferensiBankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = ReferensiBank::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $detail = '<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal" data-id="'.$row->id.'" class="btn btn-primary btn-sm" id="detail">Detail</a>';
                        $ubah = '<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal" data-id="'.$row->id.'" class="btn btn-primary btn-sm ms-1" id="ubah">Ubah</a>';
                        $hapus = ' <a href="javascript:void(0)" data-id="'.$row->id.'" class="btn btn-primary btn-sm" id="hapus">Hapus</a>';
                        $button = $detail.$ubah.$hapus;
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('referensi_bank.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->validation());
        ReferensiBank::create($request->all());

        return response()->json(['success' => 'Data has been created successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(ReferensiBank $referensiBank)
    {
        return response()->json($referensiBank);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReferensiBank $referensiBank)
    {
        return response()->json($referensiBank);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReferensiBank $referensiBank)
    {
        $request->validate($this->validation());
        $referensiBank->fill($request->post())->save();

        return response()->json(['success' => 'Data has been updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReferensiBank $referensiBank)
    {
        $referensiBank->delete();

        return response()->json(['success' => 'Data has been deleted successfully!']);
    }

    public function validation()
    {
        return [
            'kode_satker' => 'required',
            'nama_satker' => 'required',
            'nomor_rekening' => 'required',
            'uraian_rekening' => 'required',
            'jenis_rekening' => 'required',
            'nama_bank' => 'required',
            'surat_izin' => 'required',
            'tanggal_surat' => 'required',
            'status_rekening' => 'required',
        ];
    }
}

