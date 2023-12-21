<?php

namespace App\Http\Controllers;

use App\Models\Gfx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GfxController extends Controller
{
    public function __invoke()
    {
        // try {
        //     $files = Storage::disk('sftp_bni')->files();
        // } catch (\Throwable $th) {
        //     throw $th;
        // }

        // return response()->json($files);

        try {
            $files = Storage::disk('sftp_mandiri')->files();
        } catch (\Throwable $th) {
            throw $th;
        }

        return response()->json($files);

        // $files['file'] = $files['file'];
        // foreach ($files as $file) {
            // $gfx = Gfx::insert([
            //     'file' => $files,
            // ]);
        // }

        // $arr = collect();
        // foreach ($files as $file) {
        //     if (substr($file, 0, 1) !== 'S') {
                // $gfx = Gfx::updateOrCreate([
                //     'no' => substr($file,27,10),
                //     'tgl' => substr($file,0,8),
                //     'file' => $file,
                // ]);
        //         $object = new stdClass();
        //             $object = [
        //                 'no' => substr($file,27,10),
        //                 'tgl' => substr($file,0,8),
        //                 'file' => $file,
        //             ];
        //             $arr->push($object);
        //     }
        // }
        // $arr = json_decode($arr, false);

        // $files = json_decode($files, false);
        // return response(json_encode($files, true));

    }
}
