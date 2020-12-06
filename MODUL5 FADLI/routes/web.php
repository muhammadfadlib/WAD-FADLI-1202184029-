<?php

use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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
    return view('home');
});
Route::get('/insert', function () {
    return view('insert');
});
Route::get('/history', [OrdersController::class, 'history']);
Route::post('/proses', [ProductsController::class, 'add']);
Route::delete('/deleteproduct/{id}', [ProductsController::class, 'hapusproduct']);
Route::get('/edit/{id}', [ProductsController::class, 'edit']);
Route::patch('/update/{id}',[ProductsController::class, 'update']);
Route::get('/product',[ProductsController::class, 'display'] );
Route::get('/order',[ProductsController::class, 'tampil'] );
Route::get('/ProsesOrder/{id}',[OrdersController::class, 'showproduct'] );
Route::post('/beli',[OrdersController::class, 'addOrder'] );
