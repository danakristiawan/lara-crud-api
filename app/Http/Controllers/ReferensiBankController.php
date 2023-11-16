<?php

namespace App\Http\Controllers;

use App\Models\ReferensiBank;
use Illuminate\Http\Request;

class ReferensiBankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('referensi_bank.index', [
            'referensiBank' => ReferensiBank::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('referensi_bank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->validation());
        ReferensiBank::create($request->all());

        return redirect()->route('data-rekening.index')->with('success', 'Data has been created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ReferensiBank $referensiBank)
    {
        return view('referensi_bank.show', compact('referensiBank'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReferensiBank $referensiBank)
    {
        return view('referensi_bank.edit', compact('referensiBank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReferensiBank $referensiBank)
    {
        $request->validate($this->validation());
        $referensiBank->fill($request->post())->save();

        return redirect()->route('data-rekening.index')->with('success', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReferensiBank $referensiBank)
    {
        $referensiBank->delete();
        return redirect()->route('data-rekening.index')->with('success', 'Data has been deleted successfully!');
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

