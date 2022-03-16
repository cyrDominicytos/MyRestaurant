<?php

use Illuminate\Support\Facades\Route;

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

Route::get('Admin', function(){
    return view('admin.app');})->name('admin');

Route::get('Admin/newCLient',[App\Http\Controllers\AdminController::class, 'showUser'])->name('newClient');
Route::post('Admin/newCLient',[App\Http\Controllers\AdminController::class, 'createUser'])->name('createuser');

 
Route::get('Admin/updateRole',[App\Http\Controllers\RoleController::class, 'newRole'])->name('updateRole'); 
Route::post('Admin/updateRole',[App\Http\Controllers\RoleController::class, 'createRole'])->name('createrole');       

Route::get('/moi',[App\Http\Controllers\AdminController::class, 'show']);
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
