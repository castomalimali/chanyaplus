<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EbookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('chanyaplus');
});

Route::get('/courses', [CoursesController::class, 'index'])->name('courses');



Route::get('/ebooks', [EbookController::class, 'index'])->name('ebooks');


Route::get('/courses/learn-from-her-story-1', [CoursesController::class, 'showCoursesLearn'])->name('courses.learnfromher1');
Route::get('/courses/learn-from-her-story-2', [CoursesController::class, 'showCoursesLearn2'])->name('courses.learnfromher2');




Route::get('/courses/seven-levels-of-growth', [CoursesController::class, 'showSevenLevel'])->name('courses.seven-levels');

Route::get('/courses/personal-development', [CoursesController::class, 'showPersonal'])->name('courses.personaldev');

Route::get('/courses/self-awareness', [CoursesController::class, 'showSelfAwareness'])->name('courses.selfaware');

Route::get('/courses/self-evaluation', [CoursesController::class, 'showSelfEvolution'])->name('courses.selfevolution');
Route::get('/courses/self-evaluation-2', [CoursesController::class, 'showSelfEvolution2'])->name('courses.selfevolution2');
