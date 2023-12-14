<?php

namespace App\Http\Controllers;

use App\Models\DataTestLogic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataTestLogicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(DataTestLogic::all());
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
    public function show(DataTestLogic $dataTestLogic)
    {
        dd($dataTestLogic);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataTestLogic $dataTestLogic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataTestLogic $dataTestLogic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataTestLogic $dataTestLogic)
    {
        //
    }
}
