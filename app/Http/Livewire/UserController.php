<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use App\Exports\UserExport;
use App\Exports\UserPDF;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

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
        return view('livewire.Users.index', compact('users'))
        ->extends('adminlte::page');
    }

    public function generateReport(){
        return new UserExport();
    }

    public function generatePDF(){
        $users = User::all();
        $pdf = PDF::loadView('Admin.Reports.users', compact('users'));
        return $pdf->setPaper('a4', 'landscape')->stream('reporteusuarios.pdf');
    }

}
