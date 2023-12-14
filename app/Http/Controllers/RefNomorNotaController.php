<?php

namespace App\Http\Controllers;

use App\Models\RefNomorNota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;

class RefNomorNotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = RefNomorNota::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $ubah = '<a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#myModal" data-id="'.$row->id.'" class="btn btn-primary btn-sm ms-1" id="ubah">Ubah</a>';
                        $hapus = ' <a href="javascript:void(0)" data-id="'.$row->id.'" class="btn btn-primary btn-sm" id="hapus">Hapus</a>';
                        $button = $ubah.$hapus;
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('ref_nomor_nota');
    }

    public function store(Request $request)
    {
        $request->validate($this->validation());
        RefNomorNota::create($request->all());
        return response()->json(['success' => 'Data has been created successfully!']);
    }

    public function show($id)
    {
        $refNomorNota = RefNomorNota::findOrFail($id);
        return response()->json($refNomorNota);
    }

    public function update(Request $request, $id)
    {
        $request->validate($this->validation());
        $refNomorNota = RefNomorNota::findOrFail($id);
        $refNomorNota->fill($request->post())->save();
        return response()->json(['success' => 'Data has been updated successfully!']);
    }

    public function destroy($id)
    {
        $refNomorNota = RefNomorNota::findOrFail($id);
        $refNomorNota->delete();

        return response()->json($refNomorNota);
    }

    public function validation()
    {
        return [
            'kode_satker' => 'required',
            'nomor' => 'required',
        ];
    }
}
