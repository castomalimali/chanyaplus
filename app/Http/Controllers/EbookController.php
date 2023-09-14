<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function index(){
        return view('ebooks.index');
    }
    public function showTimiza(){
        return view('ebooks.timiza.index');
    }
    public function playBook(){
        return view('ebooks.timiza.audio');
        
    }
}
