<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryController extends Component
{
    use WithPagination;

    public $search, $name, $description;

    protected $listeners = ['render', 'delete'];

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }


    public function mount(Category $category)
    {
        $this->category = $category;
    }


    public function render()
    {

        if (strlen($this->search) > 0)
        $categories = Category::where('name', 'like', '%' . $this->search . '%')->paginate(8);
    else
        $categories = Category::paginate(8);

        return view('livewire.Categories.index', compact('categories'))->extends('adminlte::page');
    }


    public function CreateCategory()
    {


        $rules = [
            'name' => 'required|min:2|unique:categories',
            'description' => 'required|min:2'
        ];
        $messages = [
            'name.required' => 'La categoría es requerida',
            'name.min' => 'El nombre de la categoría debe tener al menos 2 caracteres',
            'name.unique' => 'La categoría ya existe',
            'description.required' => 'La descripción es requerida',
            'description.min' => 'La descripción debe tener al menos 2 caracteres',

        ];


        $this->validate($rules, $messages);

        Category::create(
            [
                'name' => $this->name,
                'description' => $this->description
            ]
        );

        $this->emit('render');
        $this->emit('alert', '¡El rol se creó correctamente!');
    }

    public function Edit(Category $category)
    {
        $this->id = $category->id;
        $this->name = $category->name;
        $this->description = $category->description;
    }

    public function updateCategory(Category $category)
    {

        $rules = [
            'name' => 'required|min:2|unique:categories',
            'description' => 'required|min:2'
        ];
        $messages = [
            'name.required' => 'La categoría es requerida',
            'name.min' => 'El nombre de la categoría debe tener al menos 2 caracteres',
            'name.unique' => 'La categoría ya existe',
            'description.required' => 'La descripción es requerida',
            'description.min' => 'La descripción debe tener al menos 2 caracteres',

        ];

        $this->validate($rules, $messages);
        $category->name = $this->name;
        $category->description = $this->description;
        $category->update();
        $this->emit('render');
        $this->emit('alert', '¡La categoría se actualizó correctamente!');
        $this->resetUI();
    }


    public function delete(Category $category)
    {
        $category->delete();
    }


    public function resetUI()
    {
        $this->name = '';
        $this->description = '';
        $this->resetValidation();
    }

}
