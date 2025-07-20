<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class ImageList extends Component
{
    public $maxItems;
    public Collection $images;
    /**
     * Create a new component instance.
     */
    public function __construct( $images, $maxItems = '5' ) {
       $this->images = $images;
       $this->maxItems = $maxItems;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image-list');
    }
}
