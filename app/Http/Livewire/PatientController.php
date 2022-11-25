<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class PatientController extends Component
{
    protected $listeners = ['render', 'delete'];

    use WithPagination;

    private $pagination = 8;

    public $search, $name, $lastname, $phone, $address, $email, $date, $dni;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function mount(Patient $patient)
    {
        $this->patient = $patient;
    }


    public function render()
    {
        if (strlen($this->search) > 0)
            $patients = Patient::where('name', 'like', '%' . $this->search . '%')->paginate(8);
        else
            $patients = Patient::orderBy('name', 'desc')->paginate(8);


        return view('livewire.Patients.index', compact('patients'))->extends('adminlte::page');
    }


    public function CreatePatient()
    {

        $rules = [
            'name' => 'required|min:2',
            'lastname' => 'required|min:2',
            'phone' => 'required|min:9|integer',
            'dni' => 'required|min:8',
            'address' => 'required|min:2',
            'email' => 'required|email|unique:patients',
            'date' => 'required'

        ];

        $messages = [
            'name.required' => 'El nombre del paciente es requerido',
            'name.min' => 'El nombre del paciente debe tener al menos 2 caracteres',
            'lastname.required' => 'El apellido del paciente es requerido',
            'lastname.min' => 'El apellido del paciente debe tener al menos 2 caracteres',
            'phone.required' => 'El télefono del paciente es requerido',
            'phone.min' => 'Ingrese un número de teléfono válido',
            'phone.integer' => 'Ingrese un número de teléfono válido',
            'address.required' => 'La dirección del paciente es requerido',
            'address.min' => 'La dirección del paciente debe tener al menos 2 caracteres',
            'email.required' => 'El correo es requerido',
            'email.required' => 'El correo es requerido',
            'email.unique' => 'El correo ya existe',
            'date.required' => 'La fecha es requerida',
            'dni.required' => 'El DNI es requerido',
            'dni.min' => 'Ingrese un número de dni válido',

        ];


        $this->validate($rules, $messages);

        Patient::create([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'dni' => $this->dni,
            'email' => $this->email,
            'address' => $this->lastname,
            'date' => $this->date
        ]);

        $this->emit('render');
        $this->emit('alert', '¡El paciente se registró correctamente!');
        $this->resetUI();
    }


    public function Edit(Patient $patient)
    {
        $this->id = $patient->id;
        $this->name = $patient->name;
        $this->lastname = $patient->lastname;
        $this->phone = $patient->phone;
        $this->email = $patient->email;
        $this->dni = $patient->dni;
        $this->date = $patient->date;
        $this->address = $patient->address;
    }


    public function UpdatePatient(Patient $patient)
    {

        $rules = [
            'name' => 'required|min:2',
            'lastname' => 'required|min:2',
            'phone' => 'required|min:9|integer',
            'dni' => 'required|min:8',
            'address' => 'required|min:2',
            'email' => 'required|email|unique:patients',
            'date' => 'required'

        ];

        $messages = [
            'name.required' => 'El nombre del paciente es requerido',
            'name.min' => 'El nombre del paciente debe tener al menos 2 caracteres',
            'lastname.required' => 'El apellido del paciente es requerido',
            'lastname.min' => 'El apellido del paciente debe tener al menos 2 caracteres',
            'phone.required' => 'El télefono del paciente es requerido',
            'phone.min' => 'Ingrese un número de teléfono válido',
            'phone.integer' => 'Ingrese un número de teléfono válido',
            'address.required' => 'La dirección del paciente es requerido',
            'address.min' => 'La dirección del paciente debe tener al menos 2 caracteres',
            'email.required' => 'El correo es requerido',
            'email.required' => 'El correo es requerido',
            'email.unique' => 'El correo ya existe',
            'date.required' => 'La fecha es requerida',
            'dni.required' => 'El DNI es requerido',
            'dni.min' => 'Ingrese un número de dni válido',

        ];

        $this->validate($rules, $messages);
        $patient->name = $this->name;
        $patient->lastname = $this->lastname;
        $patient->phone = $this->phone;
        $patient->email = $this->email;
        $patient->dni = $this->dni;
        $patient->date = $this->date;
        $patient->address = $this->address;
        $patient->update();

        $this->emit('render');
        $this->emit('alert', '¡El paciente se actualizó correctamente!');
        $this->resetUI();
    }

    public function delete(Patient $patient)
    {
        $patient->delete();
    }



    public function resetUI()
    {
        $this->name = '';
        $this->lastname = '';
        $this->phone = '';
        $this->email = '';
        $this->dni = '';
        $this->date = '';
        $this->address = '';
        $this->resetValidation();
    }

}
