<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CashRegisterController extends Component
{
    public function render()
    {
        return view('livewire.CashRegister.index')->extends('adminlte::page');
    }
}
