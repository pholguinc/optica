<?php

namespace App\Http\Livewire;

use App\Models\Query;
use Livewire\Component;
use Livewire\WithPagination;

class QueryController extends Component
{
    public $search;
    use WithPagination;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {


        if (strlen($this->search) > 0)


            $queries = Query::select('id', 'code','user_id', 'patient_id')->with([
                'user' => function ($query){
                    $query->select('id', 'name');
                },
            ])
            ->whereHas('user', function ($query){
                return $query->where('name', 'like', '%' . $this->search . '%');
            })->paginate(8);

        else

            $queries = Query::select('id', 'code','user_id', 'patient_id')->with([
                'user' => function ($query){
                    $query->select('id', 'name');
                },
            ])
            ->whereHas('user', function ($query){
                return $query->orderBy('name', 'desc');
            })->paginate(8);

            //dd($queries);

        return view('livewire.Queries.index', compact('queries'))->extends('adminlte::page');

    }
}
