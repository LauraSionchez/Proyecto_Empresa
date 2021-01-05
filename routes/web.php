<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\CFamilyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FamilyController;


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

// home

Route::get('/', [HomeController::class, 'index'])->name('home.index');

//employees

// route::resource('employees', EmployeeController::class);

Route::get('/employee', [EmployeeController::class, 'index'])->name('Employee.index');
Route::get('employee/new', [EmployeeController::class, 'create'])->name('Employee.create');
Route::post('employee/new', [EmployeeController::class, 'store'])->name('Employee.store');
Route::get('employee/{id}/edit', [EmployeeController::class, 'edit'])->name('Employee.edit');
Route::post('employee/update', [EmployeeController::class, 'update'])->name('Employee.update');
Route::delete('employee/{id}', [EmployeeController::class, 'destroy'])->name('Employee.destroy');

//type_doc

// route::resource('doc', DocumentController::class);

Route::get('doc', [DocumentController::class, 'index'])->name('Document.index');
Route::get('doc/new', [DocumentController::class, 'create'])->name('Document.create');
Route::post('doc/new', [DocumentController::class, 'store'])->name('Document.store');
Route::get('doc/{id}/edit', [DocumentController::class, 'edit'])->name('Document.edit');
Route::post('doc/update', [DocumentController::class, 'update'])->name('Document.update');
Route::delete('doc/{id}', [DocumentController::class, 'destroy'])->name('Document.destroy');


// familia

Route::get('family', [FamilyController::class, 'index'])->name('Family.index');
Route::get('family/new', [FamilyController::class, 'create'])->name('Family.create');
Route::post('family/new', [FamilyController::class, 'store'])->name('Family.store');
Route::get('family/{id}/edit', [FamilyController::class, 'edit'])->name('Family.edit');
Route::post('family/update', [FamilyController::class, 'update'])->name('Family.update');
Route::delete('family/{id}', [FamilyController::class, 'destroy'])->name('Family.destroy');