<?php

namespace Dcolsay\Cockpit\Components;

use Illuminate\View\Component;

class Link extends Component
{
     /**
     * The button title.
     *
     * @var string
     */
    public $title;

    public $type;

    public $href;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $href, $type)
    {
        $this->title = $title;
        $this->type = $type;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('cockpit::components.link');
    }
}
