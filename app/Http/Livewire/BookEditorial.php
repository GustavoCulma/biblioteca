<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookEditorial extends Component
{
    public $editorial;

    //tiempo de carga
    public $books = [];

    
    public function loadPosts()
    {
        //accediendo a la relacion editorial books
        $this->books = $this->editorial->books;

        //emitiendo el evento glider
        $this->emit('glider', $this->editorial->id);
    }


    public function render()
    {
        return view('livewire.book-editorial');
    }
}
