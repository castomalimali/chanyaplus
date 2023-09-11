<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EbookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('chanyaplus');
});

Route::get('/courses', [CoursesController::class, 'index'])->name('courses');

Route::get('/ebooks', [EbookController::class, 'index'])->name('ebooks');
Route::get('/courses/Learn-from-her-story-1', [CoursesController::class, 'showCoursesLearn'])->name('courses.learnfromher1');
Route::get('/courses/Learn-from-her-story-2', [CoursesController::class, 'showCoursesLearn2'])->name('courses.learnfromher2');
