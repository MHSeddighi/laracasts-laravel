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
    public String $background;
    public String $cardType;

    /**
     * @param String|null $title
     * @param $width
     * @param $cardType
     */
    public function __construct(String $title="", $width=null, $background=null,
                                String $cardType="small")
    {
        $this->title= $title;
        $this->width = $width;
        $this->cardType=$cardType;
        $this->background=$background;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $course=Course::where('slug',slugify($this->title,"-"))->first();
        $courseLength=0;
        if(!is_null($course)){
            foreach ($course->episodes as $episode){
                $courseLength+=$episode->video->duration;
            }
        }
        return view('components.course-card')->with([
            'course'=>$course,
            'courseLength'=>convertSecondsToClockTime($courseLength)
        ]);
    }
}
