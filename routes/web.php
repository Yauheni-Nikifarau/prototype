<?php

use App\Http\Controllers\OrderController;
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
Route::get('/', function () {
    return redirect('/orders');
});
Route::get('/orders', [OrderController::class, 'showOrdersPage']);
Route::get('/orders/new', [OrderController::class, 'showCreatePage']);
Route::get('/orders/{order}/edit', [OrderController::class, 'showEditPage']);
Route::get('/orders/{order}/copy', [OrderController::class, 'copyOrder']);
Route::post('/orders/new', [OrderController::class, 'createOrder']);
Route::post('/orders/{order}/edit', [OrderController::class, 'updateOrder']);
