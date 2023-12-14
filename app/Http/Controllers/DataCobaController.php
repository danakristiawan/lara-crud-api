<?php

namespace App\Http\Controllers;

use App\Models\DataCoba;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataCobaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(DataCoba::all());
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
    public function show(DataCoba $dataCoba)
    {
        dd($dataCoba);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataCoba $dataCoba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataCoba $dataCoba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataCoba $dataCoba)
    {
        //
    }
}
