<?php

namespace App\Http\Controllers;

use App\Models\Tes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(Tes::all()->toArray());
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
    public function show(Tes $tes)
    {
        // $tes = Tes::findOrFail($id);
        dd($tes);
        // dd('oke');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tes $tes)
    {
        dd($tes->toArray());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tes $tes)
    {
        dd($tes->toArray());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tes $tes)
    {
        dd($tes->toArray());
    }
}
