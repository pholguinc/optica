<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AttentionController extends Component
{
    public function render()
    {
        return view('livewire.Attention.index')->extends('adminlte::page');
    }
}
