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

Route::group(['middleware'=>['auth']], function(){ 
    Route::get('Admin', function(){return view('admin.app');})->name('admin');

    Route::get('Admin/profile', function(){return view('admin.profile');})->name('profile');

    Route::get('Admin/newCategory',[App\Http\Controllers\FoodController::class,'show'])->name('newCategory');
    Route::post('Admin/createCatgory',[App\Http\Controllers\FoodController::class,'create'])->name('create_category');
    Route::get('Admin/editCatgory/{id}',[App\Http\Controllers\FoodController::class,'show'])->name('edit_category');
    Route::post('Admin/updateCatgory/{id}',[App\Http\Controllers\FoodController::class,'update'])->name('update_category');
    Route::get('Admin/deleteCatgory/{id}',[App\Http\Controllers\FoodController::class,'delete'])->name('delete_category');

    Route::get('Admin/listCategory',[App\Http\Controllers\FoodController::class,'list'])->name('listCategory');

    Route::get('Admin/newFood', function(){return view('admin.menu.newFood');})->name('newFood');
    Route::get('Admin/listFood', function(){return view('admin.menu.listFood');})->name('listFood');

    Route::get('Admin/listRole',[App\Http\Controllers\RoleController::class,'showRole'])->name('listRole');
    
    Route::get('Admin/list',[App\Http\Controllers\AdminController::class,'show'])->name('list');
    
    Route::get('Admin/edit/{id}',[App\Http\Controllers\AdminController::class,'edit'])->name('user_edit');
    
    Route::get('Admin/delete/{id}',[App\Http\Controllers\AdminController::class,'destroy'])->name('user_delete');
    Route::post('Admin/update/{id}',[App\Http\Controllers\AdminController::class,'update'])->name('user_update');
    Route::get('Admin/bannir/{id}/{bannir}',[App\Http\Controllers\AdminController::class,'block'])->name('user_block');
    
    Route::get('Admin/newCLient',[App\Http\Controllers\AdminController::class, 'showUser'])->name('newClient');
    Route::post('Admin/newCLient',[App\Http\Controllers\AdminController::class, 'createUser'])->name('createuser');
    
    
     
    Route::get('Admin/updateRole',[App\Http\Controllers\RoleController::class, 'newRole'])->name('new_Role'); 
    Route::post('Admin/updateRole',[App\Http\Controllers\RoleController::class, 'createRole'])->name('createrole');   
    Route::get('Admin/editRole/{id}',[App\Http\Controllers\RoleController::class, 'edit'])->name('edit_Role');
    Route::post('Admin/updateRole/{id}',[App\Http\Controllers\RoleController::class, 'updateRole'])->name('update_Role'); 
    Route::get('Admin/deleteRole/{id}',[App\Http\Controllers\RoleController::class, 'delete'])->name('delete_Role'); 
});
   

Route::get('/moi',[App\Http\Controllers\AdminController::class, 'new']);
Route::get('/', function () {
    return view('auth.login');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
