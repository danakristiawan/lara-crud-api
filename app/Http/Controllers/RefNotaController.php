<?php

namespace App\Http\Controllers;

use App\Models\RefNota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RefNotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(RefNota::all());
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
    public function show(RefNota $refNota)
    {
        dd($refNota);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RefNota $refNota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RefNota $refNota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RefNota $refNota)
    {
        //
    }
}
