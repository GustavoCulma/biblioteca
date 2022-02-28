<?php

namespace App\Http\Livewire;

use App\Models\Editorial;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $editorials = Editorial::all();
        return view('livewire.navigation', compact('editorials'));
    }
}
