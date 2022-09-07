<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RadialProgress extends Component
{
    public $page;
    public $episodeNumber;
    public $percent;
    public $episode;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($page = null, $episodeNumber = 0, $percent = 0, $episode = null)
    {
        $this->page = $page;
        $this->episodeNumber = $episodeNumber;
        $this->percent = $percent;
        $this->episode = $episode;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.radial-progress');
    }
}
