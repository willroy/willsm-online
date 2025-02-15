<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label,
        public string $img,
        public string $href,
        public string $fontsize,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-button');
    }
}
