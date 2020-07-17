<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MultiformEdit extends Component
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
        // if ($this->item) {
        //     switch ($this->model) {
        //         case 'attitude':
        //             $item = Attitude::find($this->mid);                    
        //             break;
        //         case 'industry':
        //             $item = Industry::find($this->mid);   
        //             $this->sector = $item->sector;                               
        //             break;
        //         case 'guide':
        //             $item = Guide::find($this->mid); 
        //             break;
        //         case 'phase':
        //             $item = Phase::find($this->mid);  
        //             $this->color = $item->color;                   
        //             break;
        //         case 'taxonomy':
        //             $item = Taxonomy::find($this->mid); 
        //             break;            
        //         default:
        //             $item = Resource::find($this->mid); 
        //             $this->affiliate_ur = $item->affiliate_ur;
        //             break;
        //     }

        //     $this->name = $item->name;
        //     $this->slug = $item->slug;
        //     $this->description = $item->description;
        //     $this->icon = $item->icon;
        //     $this->image = $item->image;                          
            
        // }
        return view('components.multiform-edit');
    }
}
