<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class CourseControllerr extends Controller
{
    //
    use apiResponseTrait;
    use checkApi;
    public function index()
    {
        //
        $student = Student::find(1);
       
         return $student->courses()->get();
      
       
       
    }
    public function all(){
      
        $courses=Course::all();

        return $this->checkRequest($courses); 
      
    }
    public function show($id){
        $course=Course::find($id);

        return $this->checkRequest($course); 
    }
    public function sections(){
        $section=Course::find(1);
        echo $section->sections()->get();
    }
    public function Reviews(){
        $course = Course::find(1);
       
        echo $course->Reviews()->get();
    }
}
