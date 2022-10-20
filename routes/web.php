<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use App\Http\Livewire\CategoryController;
use App\Http\Livewire\EmployeeController;
use App\Http\Livewire\PatientController;
use App\Http\Livewire\RegisterPatientController;
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

Route::get('admin/usuarios', UserController::class);
Route::get('admin/categorias', CategoryController::class);

Route::get('admin/pacientes', PatientController::class)->name('admin.pacientes.index');


//Reportes
Route::get('admin/reportes/usuarios/pdf', [UserController::class, 'generatePDF']);

