<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBook extends Component
{

    //imagen
    use WithFileUploads;
    //propiedad para abirr el boton
    public $open = false;
      
    //identificador para que el input file cambie por un nuevo input
    public $title;
    public $synopsis;
    public $n_pages;
    public $image;
    public $identificador;

    

    public function mount()
    {
        $this->identificador = rand();
    }
  
    public function render()
    {
        return view('livewire.create-book');
    }
}
