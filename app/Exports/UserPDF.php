<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Excel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class UserPDF implements FromCollection, FromView
{
    use Exportable;



    public function collection()
    {
        return User::all();
    }

    public function view(): View
    {
        return view('Admin.Reports.users', [
            'users' => User::all()
        ]);
    }
}
