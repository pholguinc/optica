<?php

namespace App\Http\Livewire;

use App\Models\Provider;
use Livewire\Component;
use Livewire\WithPagination;

class ProviderController extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        $providers = Provider::paginate(7);
        return view('livewire.Providers.index', compact('providers'))->extends('adminlte::page');
    }
}
