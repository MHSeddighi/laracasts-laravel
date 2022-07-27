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
    public $width;
    public $height;

    /**
     * @param $imageSource
     * @param $imageBackground
     * @param $title
     * @param $time
     * @param $lessonNumbers
     * @param $type
     * @param $difficulty
     * @param $content
     * @param $width
     */
    public function __construct($imageSource=null, $imageBackground=null, $title=null, $time=null, $lessonNumbers=null, $type=null, $difficulty=null, $content=null, $width=null,$height=null)
    {
        $this->imageSource = $imageSource;
        $this->imageBackground = $imageBackground;
        $this->title = $title;
        $this->time = $time;
        $this->lessonNumbers = $lessonNumbers;
        $this->type = $type;
        $this->difficulty = $difficulty;
        $this->content = $content;
        $this->width = $width;
        $this->height=$height;
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
