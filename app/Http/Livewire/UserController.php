<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserController extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        $users = User::paginate(8);
        return view('livewire.Users.index', compact('users'))->extends('adminlte::page');
    }
}
