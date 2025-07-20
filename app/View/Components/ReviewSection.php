<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReviewSection extends Component
{
    public $img;
    public $handle;
    public $name;
    public $desc;

    /**
     * Create a new component instance.
     */
    public function __construct($img, $handle, $name, $desc)
    {
       $this->img = $img;
       $this->handle = $handle;
       $this->name = $name;
       $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.review-section');
    }
}
