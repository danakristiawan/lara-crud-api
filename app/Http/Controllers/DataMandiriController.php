<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataMandiriController extends Controller
{
    public function index(Request $request)
    {
        try {
            $files = Storage::disk('sftp_mandiri')->files();
        } catch (\Throwable $th) {
            throw $th;
        }

        return response()->json($files);
}
}
