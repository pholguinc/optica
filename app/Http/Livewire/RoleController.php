<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RoleController extends Component
{
    public function render()
    {
        return view('livewire.Roles.index')->extends('adminlte::page');
    }
}
