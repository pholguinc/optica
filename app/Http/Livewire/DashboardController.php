<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardController extends Component
{
    public function render()
    {
        return view('livewire.Dashboard.index')->extends('adminlte::page');
    }
}
