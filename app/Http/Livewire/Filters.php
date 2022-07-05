<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Filters extends Component
{
    public $categories;
    public $activeFilters=[];
    public function render()
    {
        $this->activeFilters = array_filter($this->activeFilters,function($val){
            return $val!== false;
        });
        return view('livewire.filters', [
            'articles' => (empty($this->activeFilters))
            ? Article::all()
            : $articles=Article::wherein('category_id',array_keys($this->activeFilters))->get()
        ]);
    }
}
