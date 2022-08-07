<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($courseTitle){
        $course=Course::where('title',slugify($courseTitle))->first();
        return view('course')->with($course);
    }

    public function create(){

    }

    public function add_video(){

    }


}
