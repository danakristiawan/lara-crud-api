<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReferensiBank;
use Illuminate\Support\Facades\Storage;

class DataBniController extends Controller
{
    public function index()
    {
        // $files = Storage::disk('sftp_bni')->files();
        $list = [];
        try {
            $files = Storage::disk('sftp_bni')->files();
        } catch (\Throwable $th) {
            throw $th;
        }
        $nomor_rekening_lelang = ReferensiBank::lelangPerSatker()->first()->nomor_rekening;
        foreach ($files as $file) {
            if (substr($file, 0, 1) !== 'S' and substr($file, 28, 10) == $nomor_rekening_lelang) {
                $list +=($file);
            }
        }

        dd($list);
    }
}
