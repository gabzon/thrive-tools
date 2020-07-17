<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Details extends Component
{

    public $model;
    public $item;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model, $item)
    {
        $this->model = $model;
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {        
        return view('components.details');
    }
}
