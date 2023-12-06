<?php

namespace App\Http\Controllers;

use stdClass;
use Illuminate\Http\Request;
use App\Models\ReferensiBank;
use Illuminate\Support\Facades\Storage;
use DataTables;

class DataBniController extends Controller
{
    public function index(Request $request)
    {
        // try {
            //     $files = Storage::disk('sftp_bni')->files();
            // } catch (\Throwable $th) {
                //     throw $th;
                // }

        if ($request->ajax()) {

            $files =  json_decode(Storage::disk('public')->get('response.json'), false);

            // $files =  json_decode(Storage::disk('sftp_bni')->files(), false);

            $arr = collect();
            $nomor_rekening_lelang = ReferensiBank::lelangPerSatker()->first()->nomor_rekening;
            foreach ($files as $file) {
                if (substr($file, 0, 1) !== 'S' and substr($file, 28, 10) == $nomor_rekening_lelang) {
                    $object = new stdClass();
                    $object = [
                        'no' => substr($file,27,10),
                        'tgl' => substr($file,0,8),
                        'file' => $file,
                    ];
                    $arr->push($object);
                }
            }
            $arr = json_decode($arr, false);

            return DataTables::of($arr)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $proses = '<a href="javascript:void(0)" data-id="'.$row->file.'" class="btn btn-primary btn-sm" id="proses">Proses</a>';
                        $button = $proses;
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('data_bni.index');

    }
}
