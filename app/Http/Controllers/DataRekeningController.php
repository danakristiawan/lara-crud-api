<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\DataRekening;
use Illuminate\Http\Request;

class DataRekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {

    }

     public function index()
    {
        return view('data_rekening.index', [
            'dataRekening' => DataRekening::persatker()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data_rekening.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate($this->validation());
        DataRekening::create($request->all());

        return redirect()->route('data-rekening.index')->with('success', 'Data has been created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataRekening $dataRekening)
    {
        $data = $dataRekening->toArray();
        dd($dataRekening);
        return view('data_rekening.show', compact('dataRekening'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataRekening $dataRekening)
    {
        return view('data_rekening.edit', compact('dataRekening'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataRekening $dataRekening)
    {
        $request->validate($this->validation());
        $dataRekening->fill($request->post())->save();

        return redirect()->route('data-rekening.index')->with('success', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataRekening $dataRekening)
    {
        $dataRekening->delete();
        return redirect()->route('data-rekening.index')->with('success', 'Data has been deleted successfully!');
    }

    public function validation()
    {
        return [
            'kode_satker' => 'required',
            'bank' => 'required',
            'nomor' => 'required',
            'tanggal' => 'required',
            'tipe' => 'required',
            'nominal' => 'required',
            'uraian' => 'required',
        ];
    }

    public function print()
    {
        $dataRekening = DataRekening::all();
        $pdf = PDF::loadview('data_rekening.laporan', ['dataRekening'=>$dataRekening]);
    	return $pdf->stream('laporan.pdf');
    }
}
