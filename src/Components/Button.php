<?php

namespace Dcolsay\Cockpit\Components;

use Illuminate\View\Component;

class Button extends Component
{
     /**
     * The header title.
     *
     * @var string
     */
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('cockpit::components.button');
    }
}
