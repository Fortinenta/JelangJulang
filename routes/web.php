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

Route::get('/', [jelangjulangController::class, 'home']);

Route::get('/daftar', [jelangjulangController::class, 'fisrt']);
Route::get('order/{id}/{total}',[jelangjulangController::class,'order'])->name('post.show');
Route::post('order_input',[jelangjulangController::class,'input']);
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [jelangjulangController::class, 'login']);
Route::get('/update',[jelangjulangController::class, 'update']);
Route::post('/update',[jelangjulangController::class, 'updatedatadiri'])->name('update');
Route::get('/tiket',[jelangjulangController::class, 'qrcode'])->name('tiket');

Route::get('/admin', function () {
    return view('admin');
});
Route::post('/admin', [jelangjulangController::class, 'admin']);
Route::get('/pelanggan', [jelangjulangController::class, 'pelanggan'])->name('pelanggan');