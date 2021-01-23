<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jelangjulangController;
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

Route::get('/daftar', [jelangjulangController::class, 'fisrt']);
Route::get('order/{id}/{total}',[jelangjulangController::class,'order'])->name('post.show');
Route::post('order_input',[jelangjulangController::class,'input']);
