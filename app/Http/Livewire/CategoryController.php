<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryController extends Component
{
    public function render()
    {
        return view('livewire.Categories.index')->extends('adminlte::page');
    }
}
