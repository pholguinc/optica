<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Component
{

    public $roleName;

    public function render()
    {

        $roles = Role::all();
        return view('livewire.Roles.index', compact('roles'))->extends('adminlte::page');
    }

    public function CreateRole(){


        $rules = ['roleName' => 'required|min:2|unique:roles,name'];
        $messages = [
            'roleName.required' => 'El nombre del role es requerido',
            'roleName.min' => 'El nombre del role debe tener al menos 2 caracteres',
            'roleName.unique' => 'El role ya existe',

        ];

        $this->validate($rules,$messages);

        Role::create(['name' => $this->roleName ]);


    }

}
