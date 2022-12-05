<?php

namespace App\Http\Livewire;

use Illuminate\Support\Carbon;
use App\Exports\UserExport;
use App\Exports\UserPDF;
use App\Models\Product;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class UserController extends Component
{
    public $name, $lastname,$phone, $dni, $email, $password, $search, $role;

    use WithPagination;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function mount(User $user)
    {
        $this->user = $user;
    }


    public function render()
    {
        $permissions = Permission::all();
        $roles = Role::all();
        $users = User::paginate(8);
        return view('livewire.Users.index', compact('users','roles', 'permissions'))
        ->extends('adminlte::page');
    }

    public function generateReport(){
        return new UserExport();
    }

    public function generatePDF(){
        $users = User::all();
        $pdf = PDF::loadView('reports.users', compact('users'));
        return $pdf->setPaper('a4', 'landscape')->stream('reporteusuarios.pdf');
    }

    public function CreateUser()
    {

        $rules = [
            'name' => 'required|min:2',
            'lastname' => 'required',
            'phone' => 'required|min:9',
            'dni' => 'required|min:8|unique:users',
            'email' => 'required|min:9|unique:users',
        ];
        $messages = [
            'name.required' => 'El nombre es requerido',
            'name.min' => 'El nombre debe tener al menos 2 caracteres',
            'lastname.required' => 'El apellido es requerido',
            'phone.required' => 'El teléfono es requerido',
            'phone.min' => 'Ingrese un número de celular válido',
            'dni.required' => 'El DNI es requerido',
            'dni.min' => 'El DNI debe tener al menos 8 caracteres',
            'dni.unique' => 'El DNI de usuario ya existe',
            'email.required' => 'El e-mail es requerido',
            'email.min' => 'La contraseña debe tener al menos 9 caracteres',
            'email.unique' => 'El e-mail ya existe',
        ];

        $this->validate($rules, $messages);


        User::create([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'phone' => $this->phone,
            'dni' => $this->dni,
            'password' => $this->password,
            'emalil' => $this->email,
            'role' => $this->role,

        ]);

    }

    public function EditUser(User $user){

    }

    public function UpdateUser(User $user){

    }


    public function resetUI(){
        $this->name = '';
        $this->lastname = '';
        $this->phone= '';
        $this->dni = '';
        $this->password = '';
        $this->resetValidation();
    }



}
