<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KardexController extends Component
{
    public function render()
    {
        return view('livewire.Kardex.index')->extends('adminlte::page');
    }
}
