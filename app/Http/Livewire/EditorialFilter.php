<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;

class EditorialFilter extends Component
{
    public $editorial;

    public $view = "grid";

    use WithPagination;
    public function render()
    {
        $books = $this->editorial->books()->paginate(4);
        return view('livewire.editorial-filter', compact('books'));
    }
}
