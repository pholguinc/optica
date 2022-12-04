<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ProductController extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name, $barcode, $cost, $price, $stock, $alerts, $categoryId, $search, $image;

    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }

    public function mount(){
        $this->categoryId = 'Elegir';
    }

    public function render()
    {
        if(strlen($this->search) > 0)
            $products = Product::join('categories as c', 'c.id', 'products.category_id')
                                ->select('products.*', 'c.name as category')
                                ->where('products.name', 'like', '%' . $this->search .'%')
                                ->orWhere('products.barcode', 'like', '%' . $this->search .'%')
                                ->orWhere('c.name', 'like', '%' . $this->search .'%')
                                ->orderBy('products.name', 'asc')
                                ->paginate(8);
        else

        $products = Product::join('categories as c', 'c.id', 'products.category_id')
                                ->select('products.*', 'c.name as category')
                                ->orderBy('products.name', 'asc')
                                ->paginate(8);
        $categories = Category::all();
        return view('livewire.Products.index', compact('products', 'categories'))->extends('adminlte::page');
    }

    public function CreateProduct(){

        $rules = [
            'name' => 'required|unique:products|min:3',
            'cost' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'alerts' => 'required',
            'categoryId' => 'required|not_in:Elegir'
        ];

        $messages = [
            'name.required' => 'EL nombre del producto es requerido',
            'name.unique' => 'El producto ya existe',
            'name.min' => 'El nombre debe tener al menos 3 caracteres'
        ];


        $this->validate([$rules. $messages]);
    }
}
