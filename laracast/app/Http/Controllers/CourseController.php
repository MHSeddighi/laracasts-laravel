<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($courseTitle){
        $course=Course::where('title',$courseTitle)->first();
        return view('course.course')->with([
            'course'=>$course,
            'tutor'=>$course->tutor->user,
            'tutor_image'=>$course->tutor->user->image->src]);
    }

    public function create(){

    }

    public function add_video(){

    }


}
