<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseControllerr;
use App\Http\Controllers\SectionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('courses',[CourseControllerr::class,'index']);
Route::get('courses/all',[CourseControllerr::class,'all']);
Route::get('courses/show/{id}',action: [CourseControllerr::class,'show']);
// Route::resource('coursesSections', controller: CourseController::class);


Route::get('course/sections',  [CourseControllerr::class, 'sections']);
Route::get('course/reviews',  [CourseControllerr::class, 'Reviews']);

Route::get('section/lessons',  [SectionController::class, 'index']);
