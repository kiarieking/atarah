<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactFormController;

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

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::post('contact', [ContactFormController::class, 'store'])->name('contact');
Route::get('admin', [AdminController::class, 'index'])->name('admin');

// services
Route::get('services', [ServicesController::class, 'index'])->name('services');
Route::post('new_service', [ServicesController::class, 'newService'])->name('new_service');
Route::get('edit_service/{id}', [ServicesController::class, 'editService'])->name('edit_service');
Route::put('save_edit_service/{id}', [ServicesController::class, 'saveEditService'])->name('save_edit_service');
Route::delete('delete_service/{id}', [ServicesController::class, 'deleteService'])->name('delete_service');

// models
Route::get('models', [ModelsController::class, 'index'])->name('models');
Route::post('new_model', [ModelsController::class, 'newModel'])->name('new_model');

