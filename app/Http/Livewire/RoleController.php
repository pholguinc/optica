<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Component
{
    use WithPagination;

    protected $listeners = ['render', 'delete'];

    public $roleName, $search, $role;

    private $pagination = 8;


    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function mount(Role $role)
    {
        $this->role = $role;
    }



    public function render()
    {

        if (strlen($this->search) > 0)
            $roles = Role::where('name', 'like', '%' . $this->search . '%')->paginate(8);
        else
            $roles = Role::orderBy('name', 'desc')->paginate(8);

        return view('livewire.Roles.index', compact('roles'))->extends('adminlte::page');
    }

    public function CreateRole()
    {


        $rules = ['roleName' => 'required|min:2|unique:roles,name'];
        $messages = [
            'roleName.required' => 'El nombre del role es requerido',
            'roleName.min' => 'El nombre del rol debe tener al menos 2 caracteres',
            'roleName.unique' => 'El role ya existe',

        ];


        $this->validate($rules, $messages);

        Role::create(['name' => $this->roleName]);
        $this->emit('render');
        $this->emit('alert', '¡La categoría se creó correctamente!');
        $this->resetUI();
    }


    public function resetUI()
    {
        $this->roleName = '';
        $this->resetValidation();
    }


    public function Edit(Role $role)
    {
        $this->id = $role->id;
        $this->roleName = $role->name;
    }


    public function updateRole(Role $role){

        $rules = ['roleName' => "required|min:2|unique:roles,name, {$this->id}"];
        $messages = [
            'roleName.required' => 'El nombre del role es requerido',
            'roleName.min' => 'El nombre del rol debe tener al menos 2 caracteres',
            'roleName.unique' => 'El role ya existe',

        ];

        $this->validate($rules, $messages);
        $role->name = $this->roleName;
        $role->save();
        $this->emit('render');
        $this->emit('alert', '¡La categoría se actualizó correctamente!');
        $this->resetUI();

    }

    public function delete(Role $role)
    {
        $role->delete();
    }
}
