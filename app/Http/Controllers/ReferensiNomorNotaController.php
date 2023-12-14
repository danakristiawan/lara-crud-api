<?php

namespace App\Http\Controllers;

use App\Models\ReferensiNomorNota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReferensiNomorNotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $referensiNomorNota = ReferensiNomorNota::all();
        $data = json_decode($referensiNomorNota, true);
        dd($data);
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
    public function show(ReferensiNomorNota $referensiNomorNota)
    {
        $data = json_decode($referensiNomorNota, true);
        dd($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReferensiNomorNota $referensiNomorNota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReferensiNomorNota $referensiNomorNota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReferensiNomorNota $referensiNomorNota)
    {
        //
    }
}
