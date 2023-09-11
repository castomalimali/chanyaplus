<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
   public function index(){
        return view('courses.index');
    }
    public function showCoursesLearn(){
        return view('courses.learnfromher.1');
    }
    public function showCoursesLearn2(){
        return view('courses.learnfromher.2');
    }
}
