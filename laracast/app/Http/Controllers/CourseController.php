<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index($slug)
    {
        $course = Course::where('slug', $slug)->first();
        return view('course.course')->with([
            'course' => $course,
            'tutor' => $course->tutor->user,
            'tutor_image' => $course->tutor->user->image->src
        ]);
    }

    public function beginCourse($slug, $number)
    {
        $course = Course::where('slug', $slug)->first();
        $episode = $course->episodes->where('number', 1)->first();
        return view('course.episode')->with([
            'course' => $course,
            'episode' => $episode
        ]);
    }

    public function create()
    {
    }

    public function add_video()
    {
    }
}
