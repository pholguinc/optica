<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SaleController extends Component
{
    public function render()
    {
        return view('livewire.Sales.index')->extends('adminlte::page');
    }
}
