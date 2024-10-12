<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserGroupsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.home');
});

Route::resource('users', UsersController::class );//['except' => ['show']] );//there is  ['only'] =>['show','destroy']];

Route::resource('categories', CategoriesController::class );
Route::resource('product', ProductsController::class);

Route::get('/groups', [UserGroupsController::class, 'index']);
Route::get('/groups/create', [UserGroupsController::class, 'create']);
Route::post('/groups', [UserGroupsController::class, 'store']);
Route::delete('/groups/{id}', [UserGroupsController::class, 'destroy']);

