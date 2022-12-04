<?php

namespace App\Exports;

use App\Models\Query;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class QueryExport implements FromView, ShouldAutoSize
{
    use Exportable;

    public function view() : View
    {
        return view('reports.queries', [
            'queries' => Query::all()
        ]);
    }
}
