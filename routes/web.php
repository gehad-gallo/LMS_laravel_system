<?php

use App\Http\Controllers\CourseControllerr;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get('courses',[CourseControllerr::class,'index']);

// Route::resource('coursesSections', controller: CourseController::class);


Route::get('course/sections',  [CourseControllerr::class, 'sections']);
Route::get('course/reviews',  [CourseControllerr::class, 'Reviews']);

Route::get('section/lessons',  [SectionController::class, 'index']);