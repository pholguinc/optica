<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShoppingController extends Component
{
    public function render()
    {
        return view('livewire.Shopping.index')->extends('adminlte::page');
    }
}
