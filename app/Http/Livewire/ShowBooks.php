<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowBooks extends Component
{
    use WithFileUploads;
    use WithPagination;

    //esto es una propiedad del componente la propiedad search
    public $search ="";
    public $book;
    public $image;
    public $identificador;
    public $cant="10";
 
    //estos son los eventos oyentes
    protected $listeners = ['render'=> 'render','delete'];
 
    //ordenando los parámetros de búsqueda
    public $sort="id";
    public $direction="desc";
 
    //abrir el modal
    public $open_edit = false;
 
    //tiempo de carga
    public $readyToLoad=false;

    //tiempo de carga de la pagina
    public function loadPosts()
    {
        $this->readyToLoad = true;
    }
 
    //pasando la URL
    protected $queryString= [
        'cant'=>['except'=>'10'],
        'sort'=>['except'=>'id'],
        'direction'=>['except'=>'desc'],
        'search'=>['except'=>'']
 
     ];
 
    //pasandole el metodo rand al identificador
    public function mount()
    {
        $this->identificador =rand();
        $this->book =new Book();
    }

    //borrar la paginacion cuando se busca algo
    public function updatingSearch()
    {
        $this->resetPage();
    }


    //ordenando los parámetros de búsqueda
    public function order($sort)
    {
        if ($this->sort==$sort) {
            if ($this->direction == 'desc') {
                $this->direction ='asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }
    public function render()
    {
        $books = Book::all();
        return view('livewire.show-books', compact('books'));
    }
}
