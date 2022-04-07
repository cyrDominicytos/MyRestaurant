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


    //Table route
    Route::get('Admin/table',[App\Http\Controllers\TableController::class,'new'])->name('newTable');
    Route::post('Admin/table',[App\Http\Controllers\TableController::class,'store'])->name('storeTable');
    Route::get('Admin/listTable', [App\Http\Controllers\TableController::class,'index'])->name('listTable');

       //Reservation route
    Route::get('Admin/reservation',[App\Http\Controllers\ReservationController::class,'new'])->name('newReservation');
    Route::post('Admin/reservation',[App\Http\Controllers\ReservationController::class,'store'])->name('createReservation');
    Route::get('Admin/listReservation',[App\Http\Controllers\ReservationController::class,'index'])->name('listReservation');
    Route::get('Admin/Reservation/publish/{id}',[App\Http\Controllers\ReservationController::class,'publish'])->name('publishReservation');
    Route::get('Admin/Reservation/delete/{id}',[App\Http\Controllers\ReservationController::class,'delete'])->name('deleteReservation');
          //Commande route
    Route::get('Admin/commande', function(){return view('admin.commande.new');})->name('newCommande');
    Route::get('Admin/listCommande', function(){return view('admin.commande.list');})->name('listCommande');

    //  Route category food
    Route::get('Admin/newCategory',[App\Http\Controllers\CategorieFoodController::class,'show'])->name('newCategory');
    Route::post('Admin/createCatgory',[App\Http\Controllers\CategorieFoodController::class,'create'])->name('create_category');
    Route::get('Admin/editCatgory/{id}',[App\Http\Controllers\CategorieFoodController::class,'show'])->name('edit_category');
    Route::post('Admin/updateCatgory/{id}',[App\Http\Controllers\CategorieFoodController::class,'update'])->name('update_category');
    Route::get('Admin/deleteCatgory/{id}',[App\Http\Controllers\CategorieFoodController::class,'delete'])->name('delete_category');
    Route::get('Admin/listCategory',[App\Http\Controllers\CategorieFoodController::class,'list'])->name('listCategory');

    // Route mFood
    Route::get('Admin/newFood',[App\Http\Controllers\FoodController::class,'show'])->name('newFood');
    Route::post('Admin/createFood',[App\Http\Controllers\FoodController::class,'create'])->name('create_Food');
    Route::get('Admin/editFood/{id}', [App\Http\Controllers\FoodController::class,'show'])->name('edit_Food');
    Route::get('Admin/deleteFood/{id}', [App\Http\Controllers\FoodController::class,'delete'])->name('delete_Food');
    Route::post('Admin/updateFood/{id}', [App\Http\Controllers\FoodController::class,'update'])->name('update_Food');

    Route::get('Admin/listFood',[App\Http\Controllers\FoodController::class,'lisFood'])->name('listFood');
    Route::get('Admin/listMenuFood', [App\Http\Controllers\FoodController::class,'lisFoodMenu'])->name('listMenuFood');



    Route::get('Admin/newMenuDay', [App\Http\Controllers\FoodController::class,'menuFood'])->name('newMenuDay');
    Route::post('Admin/newMenuDay/create', [App\Http\Controllers\FoodController::class,'storeMenuFood'])->name('menufoodcreate');

    Route::get('Admin/listMenuDay',[App\Http\Controllers\FoodController::class,'listMenuDay'])->name('listmenuday');

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

    Route::get('Admin/check_slug',[App\Http\Controllers\RoleController::class, 'createSlug'])->name('create_slug');
});
   

Route::get('/logout', function () { return view('auth.login');});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/clientHome', function () {return view('client.home');})->name('clientHome');

Route::get('/',[App\Http\Controllers\ClientController::class, 'index'])->name('index_client');
Route::post('/create/client',[App\Http\Controllers\ClientController::class,'create'])->name('create_client');
Route::get('/deconnexion',[App\Http\Controllers\ClientController::class,'logout'])->name('logout_client');
Route::get('/menu', function () { return view('client.menu');})->name('menu_client');