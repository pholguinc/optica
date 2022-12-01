<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use App\Http\Livewire\CashRegisterController;
use App\Http\Livewire\CategoryController;
use App\Http\Livewire\DashboardController;
use App\Http\Livewire\EmployeeController;
use App\Http\Livewire\KardexController;
use App\Http\Livewire\PatientController;
use App\Http\Livewire\ProductController;
use App\Http\Livewire\ProviderController;
use App\Http\Livewire\QueryController;
use App\Http\Livewire\RegisterPatientController;
use App\Http\Livewire\RoleController;
use App\Http\Livewire\SaleController;
use App\Http\Livewire\ShoppingController;
use App\Http\Livewire\UserController;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;
use WPGraphQL\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});


//CRUDS

Route::get('admin', DashboardController::class)->name('admin.index');
Route::get('admin/usuarios', UserController::class)->name('admin.users.index');
Route::get('admin/roles', RoleController::class)->name('admin.roles.index');
Route::get('admin/caja', CashRegisterController::class)->name('admim.cashregister.index');
Route::get('admin/categorias', CategoryController::class)->name('admin.categories.index');
Route::get('admin/pacientes', PatientController::class)->name('admin.patients.index');
Route::get('admin/pacientes/consultas', QueryController::class)->name('admin.patients.queries')->middleware('auth');
Route::get('admin/proveedores', ProviderController::class)->name('admin.providers.index');
Route::get('admin/productos', ProductController::class)->name('admin.products.index');
Route::get('admin/compras', ShoppingController::class)->name('admin.shopping.index');
Route::get('admin/ventas', SaleController::class)->name('admin.sales.index');
Route::get('admin/kardex', KardexController::class)->name('admin.kardex.index');

//Reportes
Route::get('admin/reportes/usuarios/pdf', [UserController::class, 'generatePDF']);

