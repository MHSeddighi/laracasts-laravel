<?php

namespace App\View\Components;

use App\Models\Course;
use Illuminate\View\Component;

class CourseCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public String $title;
    public String $width;
    public String $height;
    public String $imageBackground;

    /**
     * @param String|null $title
     * @param $width
     * @param $height
     */
    public function __construct(String $title=null, $width=null, $height=null,$imageBackground=null)
    {
        $this->title= $title;
        $this->width = $width;
        $this->height = $height;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $course=Course::where('title',slugify($this->title))->first();
        return view('components.course-card')->with('course',$course);
    }
}
