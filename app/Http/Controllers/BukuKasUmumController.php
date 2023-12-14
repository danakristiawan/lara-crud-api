<?php

namespace App\Http\Controllers;

use App\Models\BukuKasUmum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;

class BukuKasUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = BukuKasUmum::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('buku_kas_umum');
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
    public function show(BukuKasUmum $bukuKasUmum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BukuKasUmum $bukuKasUmum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BukuKasUmum $bukuKasUmum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BukuKasUmum $bukuKasUmum)
    {
        //
    }
}
