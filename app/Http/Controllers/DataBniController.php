<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataBniController extends Controller
{
    public function index()
    {
        $files = Storage::disk('sftp_bni')->files();
        return view('data_bni.index', compact('files'));
    }
}
