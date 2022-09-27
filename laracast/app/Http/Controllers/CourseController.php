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

    public function updatePercent($course_slug,$number)
    {
        $currentUserId=Auth::id();
        $course=Course::where('slug',$course_slug)->first();
        $currentUser=null;
        if (!is_null($currentUserId)) {
            $currentUser = User::find($currentUserId);
            if(!is_null($course_slug)){
                $eps=$currentUser->watches->firstWhere(['course_id'=>$course->id,'number'=>$number])->first();
                if(!is_null($eps)){
                    $eps->pivot->percent=100;
                    $eps->pivot->save();
                }
            }
        }
    }
}
