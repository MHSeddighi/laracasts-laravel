<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CourseCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $imageSource;
    public $imageBackground;
    public $title;
    public $time;
    public $lessonNumbers;
    public $type;
    public $difficulty;
    public $content;

    public function __construct(String $imageSource="",String $imageBackgroud="",String $title=null,String $time="",int $lessonNumbers=null,String $type="",String $difficulty="",String $content="")
    {   
        $this->imageSource=$imageSource;
        $this->imageBackgroud=$imageBackgroud;
        $this->$time=$time;
        $this->lessonNumbers=$lessonNumbers;
        $this->title=$title;
        $this->type=$type;
        $this->difficulty=$difficulty;
        $this->content=$content;
    }   



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.course-card');
    }
}
