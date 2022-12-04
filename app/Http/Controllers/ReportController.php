<?php

namespace App\Http\Controllers;

use App\Exports\QueryExport;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function generatePDF(){
        $users = User::all();
        $pdf = PDF::loadView('Admin.Reports.users', compact('users'));
        return $pdf->setPaper('a4', 'landscape')->stream('reporteusuarios.pdf');
    }

}
