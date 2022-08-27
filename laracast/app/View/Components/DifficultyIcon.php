<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DifficultyIcon extends Component
{

    public $direction;
    public $level;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($direction = null, $level = null)
    {
        $this->direction = $direction;
        $this->level = $level;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.difficulty-icon');
    }
}
