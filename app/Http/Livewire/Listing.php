<?php

namespace App\Http\Livewire;

use App\Attitude;
use App\File;
use App\Guide;
use App\Industry;
use App\Taxonomy;
use App\Tool;
use Livewire\Component;
use Livewire\WithPagination;
use App\Phase;
use App\Question;
use App\Resource;
use App\Source;
use App\Video;

class Listing extends Component
{
    use WithPagination;

    public $model;
    public $title = '';
    public $search = '';
    public $perPage = 10;
    public $sortField;
    public bool $sortAsc = TRUE;

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = TRUE;
        }
        $this->sortField = $field;
    }

    public function mount($model = 'attitude', $title = '')
    {
        $this->model = $model;
        if ($title) {
            $this->title = $title;    
        }else{
            $this->title = $model.'s';
        }
        
    }

    public function render()
    {
        switch ($this->model) {
            case 'attitude':
                $collection = Attitude::search($this->search)->latest()->paginate($this->perPage);
                break;
            case 'file':
                $collection = File::search($this->search)->latest()->paginate($this->perPage);                
                break;
            case 'guide':                
                $collection = Guide::search($this->search)->latest()->paginate($this->perPage);
                break;   
            case 'industry':
                $collection = Industry::search($this->search)->latest()->paginate($this->perPage);
                break;
            case 'phase':
                $collection = Phase::search($this->search)->latest()->paginate($this->perPage);
                break; 
            case 'question':                
                $collection = Question::search($this->search)->latest()->paginate($this->perPage);
                break;
            case 'resource':            
                $collection = Resource::search($this->search)->latest()->paginate($this->perPage);
                break; 
            case 'source':                            
                $collection = Source::search($this->search)->latest()->paginate($this->perPage);
                break; 
            case 'taxonomy':
                $collection = Taxonomy::search($this->search)->latest()->paginate($this->perPage);
                break;
            case 'video':                
                $collection = Video::search($this->search)->latest()->paginate($this->perPage);
                break;
            default:
                $collection = Tool::search($this->search)->latest()->paginate($this->perPage);
                break;
        }

        return view('livewire.listing', ['collection' => $collection]);
    }
}


//$collection = Attitude::search($this->search)->get();
//->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
//->paginate($this->perPage);
