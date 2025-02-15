<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $classes;
    public $label;
    public $href;
    public $colour;

    /**
     * Create a new component instance.
     */
    public function __construct($classes = '', $label, $href, $colour)
    {
       $this->classes = $classes;
       $this->label = $label;
       $this->href = $href;
       $this->colour = $colour;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
