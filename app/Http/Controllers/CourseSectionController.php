<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseSectionController extends Controller
{
    //
    public function index(){
        $section=Course::find(1);
        echo $section->sections()->get();
    }
}
