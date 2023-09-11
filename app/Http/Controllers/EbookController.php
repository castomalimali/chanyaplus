<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function index(){
        return view('ebooks.index');
    }
}
