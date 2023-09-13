<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        return view('courses.index');
    }
    public function showCoursesLearn()
    {
        return view('courses.learnfromher.1');
    }
    public function showCoursesLearn2()
    {
        return view('courses.learnfromher.2');
    }
    public function showSevenLevel()
    {
        return view('courses.seven-levels.1');
    }
    public function showSevenLevel2()
    {
        return view('courses.seven-levels.2');
    }
    public function showPersonal()
    {
        return view('courses.personaldev.1');
    }
    public function showSelfAwareness()
    {
        return view('courses.selfawareness.1');
    }
    public function showSelfEvolution()
    {
        return view('courses.selfevolution.1');
    }
    public function showSelfEvolution2()
    {
        return view('courses.selfevolution.2');
    }
}
