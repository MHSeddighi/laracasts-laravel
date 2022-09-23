<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User ;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    public function index($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $currentUserId=Auth::id();
        $currentUser=null;

        if (!is_null($currentUserId)) {
            $currentUser = User::find($currentUserId);
        }

        return view('course.course')->with([
            'course' => $course,
            'tutor' => $course->tutor->user,
            'tutor_image' => $course->tutor->user->image->src,
            'user'=>$currentUser
        ]);
    }

    public function beginCourse($slug, $number)
    {
        $course = Course::where('slug', $slug)->first();
        $episode = $course->episodes->where('number', $number)->first();
        $currentUserId=Auth::id();
        $watchesList=null;

        if (!is_null($currentUserId)) {
            $currentUser = User::find($currentUserId);
            $watchesList = $currentUser->watches->where('course_id',$course->id);
        }

        return view('course.episode')->with([
            'course' => $course,
            'tutor' => $course->tutor->user,
            'episode' => $episode,
            'watchesList'=>$watchesList
        ]);
    }

    public function create()
    {
    }

    public function add_video()
    {
    }
}
