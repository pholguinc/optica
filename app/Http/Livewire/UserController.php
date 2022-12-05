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
    protected $listeners = ['render', 'delete'];

    public $name, $lastname,$phone, $dni, $email, $password, $search, $roleId;

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
        $users = User::paginate(8);
        return view('livewire.Users.index', compact('users'))
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
            'password' => bcrypt($this->password),
            'email' => $this->email

        ]);

        $this->emit('render');
        $this->emit('alert', '¡El usuario se creó correctamente!');
        $this->resetUI();
    }

    public function Edit(User $user){

        $this->id = $user->id;
        $this->name = $user->name;
        $this->lastname = $user->lastname;
        $this->dni = $user->dni;
        $this->phone = $user->phone;
        $this->email = $user->email;
        $this->password = '';
    }

    public function UpdateUser(User $user){

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

        $user->name = $this->name;
        $user->lastname = $this->lastname;
        $user->name = $this->phone;
        $user->dni = $this->dni;
        $user->phone = $this->phone;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->update();
        $this->emit('render');
        $this->emit('alert', '¡El rol se actualizó correctamente!');
        $this->resetUI();

    }

    public function delete(User $user)
    {
        $user->delete();
    }


    public function resetUI(){
        $this->name = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone= '';
        $this->dni = '';
        $this->password = '';
        $this->resetValidation();
    }





}
