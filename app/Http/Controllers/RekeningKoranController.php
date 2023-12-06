<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use App\Models\RekeningKoran;
use App\Http\Controllers\Controller;

class RekeningKoranController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = RekeningKoran::latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $proses = '<a href="javascript:void(0)" data-id="'.$row->id.'" class="btn btn-primary btn-sm">Proses</a>';
                        $button = $proses;
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('rekening_koran');
    }
}
