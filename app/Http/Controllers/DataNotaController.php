<?php

namespace App\Http\Controllers;

use App\Models\DataNota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataNotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(DataNota::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DataNota $dataNota)
    {
        dd($dataNota);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataNota $dataNota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataNota $dataNota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataNota $dataNota)
    {
        //
    }
}
