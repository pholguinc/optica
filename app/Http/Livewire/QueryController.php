<?php

namespace App\Http\Livewire;

use App\Models\Query;
use Livewire\Component;
use Livewire\WithPagination;

class QueryController extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {

        $queries = Query::paginate(10);
        return view('livewire.Queries.index', compact('queries'))->extends('adminlte::page');

    }
}
