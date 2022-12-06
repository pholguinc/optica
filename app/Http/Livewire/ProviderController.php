<?php

namespace App\Http\Livewire;

use App\Models\Provider;
use Livewire\Component;
use Livewire\WithPagination;

class ProviderController extends Component
{
    use WithPagination;

    public $name, $address, $phone;

    protected $listeners = ['render', 'delete'];

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function render()
    {
        $providers = Provider::paginate(7);
        return view('livewire.Providers.index', compact('providers'))->extends('adminlte::page');
    }


    public function CreateProvider()
    {


        $rules = [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ];
        $messages = [
            'name.required' => 'El campo es requerido',
            'address.required' => 'El campo es requerido',
            'phone.required' => 'El campo es requerido',


        ];


        $this->validate($rules, $messages);

        Provider::create([
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone
        ]);
        $this->emit('render');
        $this->emit('alert', '¡El proveedor se creó correctamente!');
        $this->resetUI();
    }


    public function resetUI()
    {
        $this->name= '';
        $this->phone= '';
        $this->address= '';
        $this->resetValidation();
    }

    public function Edit(Provider $provider)
    {
        $this->id = $provider->id;
        $this->name = $provider->name;
        $this->phone = $provider->phone;
        $this->address = $provider->address;
    }


    public function updateProvider(Provider $provider)
    {

        $rules = [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ];
        $messages = [
            'name.required' => 'El campo es requerido',
            'address.required' => 'El campo es requerido',
            'phone.required' => 'El campo es requerido',


        ];

        $this->validate($rules, $messages);
        $provider->name = $this->name;
        $provider->address = $this->address;
        $provider->phone = $this->phone;
        $provider->update();
        $this->emit('render');
        $this->emit('alert', '¡El proveedor se actualizó correctamente!');
        $this->resetUI();
    }

    public function delete(Provider $provider)
    {
        $provider->delete();
    }

}
