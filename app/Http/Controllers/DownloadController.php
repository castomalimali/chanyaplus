<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download($file){
        $filePath =public_path('assets/pdf/'.$file);
        return response()->download($filePath);

    }
}
