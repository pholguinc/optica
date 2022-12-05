<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ProductController extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $name, $barcode, $cost, $price, $stock, $alerts, $categoryId, $search, $image;

    protected $listeners = ['render', 'delete'];

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
                                ->paginate(5);
        else

        $products = Product::join('categories as c', 'c.id', 'products.category_id')
                                ->select('products.*', 'c.name as category')
                                ->orderBy('products.name', 'asc')
                                ->paginate(5);
        $categories = Category::all();
        return view('livewire.Products.index', compact('products', 'categories'))->extends('adminlte::page');
    }

    public function generatePDFProducts(){
        $products = Product::all();

        $pdf = PDF::loadView('reports.products', compact('products'));
        return $pdf->setPaper('a4', 'landscape')->stream('reporteproductos.pdf');
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
            'name.required' => 'El nombre del producto es requerido',
            'name.unique' => 'El producto ya existe',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'cost.required' => 'El costo es requerido',
            'price.required' => 'El precio es requerido',
            'stock.required' => 'El stock es requerido',
            'alerts.required' => 'Las elertas son requeridas',
            'categoryId.not_in' => 'Elige un nombre diferente de Elegir',
        ];
        $this->validate($rules ,$messages);

        $product = Product::create([

            'name' => $this->name,
            'cost' => $this->cost,
            'price' => $this->price,
            'barcode' => $this->barcode,
            'stock' => $this->stock,
            'alerts' => $this->alerts,
            'category_id' => $this->categoryId,

        ]);

        $product->save();

        if($this->image){

            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/products', $customFileName);
            $product->image = $customFileName;
            $product->save();
        }
        $this->resetUI();
    }


    public function resetUI()
    {
        $this->name = '';
        $this->barcode = '';
        $this->cost = '';
        $this->price= '';
        $this->stock = '';
        $this->alerts = '';
        $this->categoryId = '';
        $this->resetValidation();
    }

    public function Edit(Product $product){
        $this->id = $product->id;
        $this->name = $product->name;
        $this->cost = $product->cost;
        $this->price = $product->price;
        $this->barcode = $product->barcode;
        $this->stock = $product->stock;
        $this->alerts = $product->alerts;
        $this->categoryId = $product->category_id;
        $this->image = $product->alerts;
    }



    public function UpdatedProduct(Product $product){

        $rules = [
            'name' => 'required|unique:products,name',
            'cost' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'alerts' => 'required',
            'categoryId' => 'required|not_in:Elegir'
        ];

        $messages = [
            'name.required' => 'El nombre del producto es requerido',
            'name.unique' => 'El producto ya existe',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'cost.required' => 'El costo es requerido',
            'price.required' => 'El precio es requerido',
            'stock.required' => 'El stock es requerido',
            'alerts.required' => 'Las elertas son requeridas',
            'categoryId.not_in' => 'Elige un nombre diferente de Elegir',
        ];
        $this->validate($rules ,$messages);

        $this->id = $product->id;
        $product->name = $this->name;
        $product->cost = $this->cost;
        $product->price = $this->price;
        $product->barcode = $this->barcode;
        $product->stock = $this->stock;
        $product->alerts = $this->alerts;
        $product->category_id = $this->categoryId;
        $product->update();

        if($this->image){

            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/products'. $customFileName);
            $imageTemp = $product->image;
            $product->image = $customFileName;
            $product->save();

            if($imageTemp != null){
                if(file_exists('storage/app/public/products' . $imageTemp)){
                    unlink('storage/app/public/products' . $imageTemp);
                }
            }
        }
        $this->resetUI();
    }

    public function delete(Product $product)
    {
        $product->delete();
    }




}
