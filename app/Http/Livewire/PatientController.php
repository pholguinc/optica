<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class PatientController extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }
    public function render()
    {
        $patients = Patient::paginate(8);
        return view('livewire.Patients.index', compact('patients'))->extends('adminlte::page');
    }
}
