<?php

namespace App\Http\Livewire;

use App\Exports\QueryExport;
use App\Models\Patient;
use App\Models\Query;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use Livewire\WithPagination;

class QueryController extends Component
{
    use WithPagination;
    public $search;
    public $componentName;
    public $pageTitle;
    public $sphereRf;
    public $cylinderRf;
    public $axisRf;
    public $dipRf;
    public $sphereLf;
    public $cylinderLf;
    public $axisLf;
    public $dipLf;
    public $sphereRn;
    public $cylinderRn;
    public $axisRn;
    public $dipRn;
    public $sphereLn;
    public $cylinderLn;
    public $axisLn;
    public $dipLn;
    public $diagnosis;
    public $control;
    public $userId;
    public $patientId;

    public $selectedInput = '';

    protected $listeners = ['render', 'delete'];


    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        if (strlen($this->search) > 0) {
            $queries = Query::select('id', 'user_id', 'patient_id', 'created_at')->with([
                'user' => function ($query) {
                    $query->select('id', 'name');
                },
                'patient' => function ($query) {
                    $query->select('id', 'name');
                },

            ])->whereHas('user', function ($query) {
                return $query->where('name', 'like', '%' . $this->search . '%');
            })->whereHas('patient', function ($query) {
                return $query->where('name', 'like', '%' . $this->search . '%');
            })
                ->paginate(8);
        } else {
            $queries = Query::paginate(8);
        }
        $users = User::all();
        $patients = Patient::all();
        return view('livewire.Queries.index', compact('queries', 'users', 'patients'))->extends('adminlte::page');
    }


    public function mount()
    {
        $this->pageTitle = 'Nueva Consulta';
    }



    public function CreateQuery()
    {
        $rules = [
            'sphereRf' => 'required',
            'cylinderRf' => 'required',
            'axisRf' => 'required',
            'dipRf' => 'required',
            'sphereLf' => 'required',
            'cylinderLf' => 'required',
            'axisLf' => 'required',
            'dipLf' => 'required',
            'sphereRn' => 'required',
            'cylinderRn' => 'required',
            'axisRn' => 'required',
            'dipRn' => 'required',
            'sphereLn' => 'required',
            'cylinderLn' => 'required',
            'axisLn' => 'required',
            'dipLn' => 'required',
            'diagnosis' => 'required',
            'patientId' => 'required',
            'userId' => 'required',
            'control' => 'required'
        ];

        $messages = [
            'sphereRf.required' => 'El campo es requerido',
            'cylinderRf.required' => 'El campo es requerido',
            'axisRf.required' => 'El campo es requerido',
            'dipRf.required' => 'El campo es requerido',
            'sphereLf.required' => 'El campo es requerido',
            'cylinderLf.required' => 'El campo es requerido',
            'axisLf.required' => 'El campo es requerido',
            'dipLf.required' => 'El campo es requerido',
            'sphereRn.required' => 'El campo es requerido',
            'cylinderRn.required' => 'El campo es requerido',
            'axisRn.required' => 'El campo es requerido',
            'dipRn.required' => 'El campo es requerido',
            'sphereLn.required' => 'El campo es requerido',
            'cylinderLn.required' => 'El campo es requerido',
            'axisLn.required' => 'El campo es requerido',
            'dipLn.required' => 'El campo es requerido',
            'diagnosis.required' => 'El campo es requerido',
            'control.required' => 'El campo es requerido',
            'patientId.required' => 'El campo es requerido',
            'userId.required' => 'El campo es requerido'

        ];

        $this->validate($rules, $messages);

        Query::create([
            'sphereRf' => $this->sphereRf,
            'cylinderRf' => $this->cylinderRf,
            'axisRf' => $this->axisRf,
            'dipRf' => $this->dipRf,
            'sphereLf' => $this->sphereLf,
            'cylinderLf' => $this->cylinderLf,
            'axisLf' => $this->axisLf,
            'dipLf' => $this->dipLf,
            'sphereRn' => $this->sphereRn,
            'cylinderRn' => $this->cylinderRn,
            'axisRn' => $this->axisRn,
            'dipRn' => $this->dipRn,
            'sphereLn' => $this->sphereLn,
            'cylinderLn' => $this->cylinderLn,
            'axisLn' => $this->axisLn,
            'dipLn' => $this->dipLn,
            'diagnosis' => $this->diagnosis,
            'control' => $this->control,
            'patient_id' => $this->patientId,
            'user_id' => $this->userId,

        ]);


        $this->emit('render');
        $this->emit('alert', '¡La consulta se realizó correctamente!');
        $this->resetUI();
    }



    public function Edit(Query $query)
    {
        $this->id = $query->id;
        $this->sphereRf = $query->sphereRf;
        $this->cylinderRf = $query->cylinderRf;
        $this->axisRf = $query->axisRf;
        $this->dipRf = $query->dipRf;
        $this->sphereLf = $query->sphereLf;
        $this->cylinderLf = $query->cylinderLf;
        $this->axisLf = $query->axisLf;
        $this->dipLf = $query->dipLf;
        $this->sphereRn = $query->sphereRn;
        $this->cylinderRn = $query->cylinderRn;
        $this->axisRn = $query->axisRn;
        $this->dipRn = $query->dipRn;
        $this->sphereLn = $query->sphereLn;
        $this->cylinderLn = $query->cylinderLn;
        $this->axisLn = $query->axisLn;
        $this->dipLn = $query->dipLn;
        $this->diagnosis = $query->diagnosis;
        $this->control = $query->control;
        $this->userId = $query->user_id;
        $this->patientId = $query->patient_id;
    }


    public function updateQuery(Query $query)
    {
        $rules = [
            'sphereRf' => 'required',
            'cylinderRf' => 'required',
            'axisRf' => 'required',
            'dipRf' => 'required',
            'sphereLf' => 'required',
            'cylinderLf' => 'required',
            'axisLf' => 'required',
            'dipLf' => 'required',
            'sphereRn' => 'required',
            'cylinderRn' => 'required',
            'axisRn' => 'required',
            'dipRn' => 'required',
            'sphereLn' => 'required',
            'cylinderLn' => 'required',
            'axisLn' => 'required',
            'dipLn' => 'required',
            'diagnosis' => 'required',
            'control' => 'required',
            'patientId' => 'required',
            'userId' => 'required'

        ];

        $messages = [
            'sphereRf.required' => 'El campo es requerido',
            'cylinderRf.required' => 'El campo es requerido',
            'axisRf.required' => 'El campo es requerido',
            'dipRf.required' => 'El campo es requerido',
            'sphereLf.required' => 'El campo es requerido',
            'cylinderLf.required' => 'El campo es requerido',
            'axisLf.required' => 'El campo es requerido',
            'dipLf.required' => 'El campo es requerido',
            'sphereRn.required' => 'El campo es requerido',
            'cylinderRn.required' => 'El campo es requerido',
            'axisRn.required' => 'El campo es requerido',
            'dipRn.required' => 'El campo es requerido',
            'sphereLn.required' => 'El campo es requerido',
            'cylinderLn.required' => 'El campo es requerido',
            'axisLn.required' => 'El campo es requerido',
            'dipLn.required' => 'El campo es requerido',
            'diagnosis.required' => 'El campo es requerido',
            'control.required' => 'El campo es requerido',
            'patientId.required' => 'El campo es requerido',
            'userId.required' => 'El campo es requerido',


        ];

        $this->validate($rules, $messages);

        $query->sphereRf = $this->sphereRf;
        $query->cylinderRf = $this->cylinderRf;
        $query->axisRf = $this->axisRf;
        $query->dipRf = $this->dipRf;
        $query->sphereLf = $this->sphereLf;
        $query->cylinderLf = $this->cylinderLf;
        $query->axisLf = $this->axisLf;
        $query->dipLf = $this->dipLf;
        $query->sphereRn = $this->sphereRn;
        $query->cylinderRn = $this->cylinderRn;
        $query->axisRn = $this->axisRn;
        $query->dipRn = $this->dipRn;
        $query->sphereLn = $this->sphereLn;
        $query->cylinderLn = $this->cylinderLn;
        $query->axisLn = $this->axisLn;
        $query->dipLn = $this->dipLn;
        $query->diagnosis = $this->diagnosis;
        $query->control = $this->control;
        $query->patient_id = $this->patientId;
        $query->user_id = $this->userId;

        $query->update();
        $this->emit('render');
        $this->emit('alert', '¡La consulta se actualizó correctamente!');
        $this->resetUI();
    }



    public function delete(Query $query)
    {
        $query->delete();
    }

    public function resetUI()
    {
        $this->sphereRf = '';
        $this->cylinderRf = '';
        $this->axisRf = '';
        $this->dipRf = '';
        $this->sphereLf = '';
        $this->cylinderLf = '';
        $this->axisLf = '';
        $this->dipLf = '';
        $this->sphereRn = '';
        $this->cylinderRn = '';
        $this->axisRn = '';
        $this->dipRn = '';
        $this->sphereLn = '';
        $this->cylinderLn = '';
        $this->axisLn = '';
        $this->dipLn = '';
        $this->diagnosis = '';
        $this->control = '';
        $this->resetValidation();
    }

    public function generateReport(){
        return new QueryExport();
    }

    public function historyReport(Query $query)
    {
        /*return (new QueryExport)->download('historia-clinica.pdf', \Maatwebsite\Excel\Excel::DOMPDF);*/

        $queries = Query::all();
        $pdf = PDF::loadView('reports.history', compact('queries'));
        return $pdf->stream('historia-clinica.pdf');

        /*return view('reports.queries');*/
    }


}
