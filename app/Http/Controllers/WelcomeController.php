<?php

namespace App\Http\Controllers;

use App\Models\Editorial;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $editorials = Editorial::all();
        return view('welcome', compact('editorials'));
    }

    public function show(Editorial $editorial)
    {
        return view('editorials.show', compact('editorial'));
    }
}
