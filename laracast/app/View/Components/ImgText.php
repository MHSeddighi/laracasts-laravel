<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImgText extends Component
{

    public $imgSrc;
    public $text;
    public $textColor;
    public $imgColor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($imgColor = null, $text = null, $textColor = null, $imgSrc = null)
    {
        $this->imgColor = $imgColor;
        $this->imgSrc = $imgSrc;
        $this->textColor = $textColor;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.img-text');
    }
}
