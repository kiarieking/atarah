<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonyController;
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


// header
Route::get('headers', [HeaderController::class, 'getHeaders'])->name('headers');
Route::get('new_headerform', [HeaderController::class, 'newHeaderForm'])->name('new_headerform');
Route::post('new_header', [HeaderController::class, 'newHeader'])->name('new_header');
Route::get('edit_headerform/{id}', [HeaderController::class, 'editHeaderForm'])->name('edit_headerform');
Route::put('edit_header/{id}', [HeaderController::class, 'editHeader'])->name('edit_header');



// services
Route::get('services', [ServicesController::class, 'index'])->name('services');
Route::get('new_serviceform', [ServicesController::class, 'newServiceForm'])->name('new_serviceform');
Route::post('new_service', [ServicesController::class, 'newService'])->name('new_service');
Route::get('edit_service/{id}', [ServicesController::class, 'editService'])->name('edit_service');
Route::put('save_edit_service/{id}', [ServicesController::class, 'saveEditService'])->name('save_edit_service');
Route::delete('delete_service/{id}', [ServicesController::class, 'deleteService'])->name('delete_service');

// models
Route::get('models', [ModelsController::class, 'index'])->name('models');
Route::get('create_model',[ModelsController::class, 'createModelForm'])->name('create_model');
Route::post('new_model', [ModelsController::class, 'newModel'])->name('new_model');
Route::get('edit_model_form/{id}', [ModelsController::class, 'editModelForm'])->name('edit_model_form');
Route::delete('delete_model/{id}', [ModelsController::class, 'deleteModel'])->name('delete_model');
Route::put('save_modelchanges/{id}', [ModelsController::class, 'modelChanges'])->name('save_modelchanges');

// contacts
Route::get('admin_contact',[ContactFormController::class, 'index'])->name('admin_contact');
Route::post('contact', [ContactFormController::class, 'store'])->name('contact');
Route::get('reply_form/{id}', [ContactFormController::class, 'replyForm'])->name('reply_form');
Route::delete('delete_message/{id}', [ContactFormController::class, 'deleteMessage'])->name('delete_message');
Route::post('admin_response', [ContactFormController::class, 'adminResponse'])->name('admin_response');

// testimonies
Route::get('testimonies', [TestimonyController::class, 'getTestimonies'])->name('testimonies');
Route::get('new_testimonyform', [TestimonyController::class, 'newTestimonyForm'])->name('new_testimonyform');
Route::post('new_testimony', [TestimonyController::class, 'newTestimony'])->name('new_testimony');
Route::get('edit_testimonyform/{id}', [TestimonyController::class, 'editTestimony'])->name('edit_testimonyform');
Route::put('save_testimonychange/{id}', [TestimonyController::class, 'saveTestimonyChange'])->name('save_testimonychange');
Route::delete('delete_testimony/{id}', [TestimonyController::class, 'deleteTestimony'])->name('delete_testimony');

//clients
Route::get('clients', [ClientsController::class, 'getClients'])->name('clients');
Route::get('add_newclientform', [ClientsController::class, 'newClientForm'])->name('add_newclientform');
Route::post('new_client', [ClientsController::class, 'newClient'])->name('new_client');
Route::get('edit_clientform/{id}', [ClientsController::class, 'editClientForm'])->name('edit_clientform');
Route::put('edit_client/{id}', [ClientsController::class, 'editClient'])->name('edit_client');
Route::delete('delete_client/{id}', [ClientsController::class, 'deleteClient'])->name('delete_client');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::get('admin', [AdminController::class, 'index'])->name('admin');
    
});