<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterPatientController extends Component
{
    public function render()
    {
        return view('livewire.Patients.history')->extends('adminlte::page');
    }
}
