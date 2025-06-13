<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public $label;
    public $href;
    public $onclick;
    public $classes;
    public $container_classes;

    /**
     * Create a new component instance.
     */
    public function __construct($label, $href, $onclick = '', $classes = '', $container_classes = '')
    {
       $this->label = $label;
       $this->href = $href;
       $this->onclick = $onclick;
       $this->classes = $classes;
       $this->container_classes = $container_classes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
