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

//Memesan tiket
Route::get('/', [jelangjulangController::class, 'fisrt']);
Route::get('/daftar', [jelangjulangController::class, 'fisrt']);
Route::get('order/{id}/{total}', [jelangjulangController::class, 'order'])->name('post.show');
Route::post('order_input', [jelangjulangController::class, 'input']);
//login untuk update data diri
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [jelangjulangController::class, 'login']);
//update data diri
Route::get('/update', [jelangjulangController::class, 'update']);
Route::post('/update', [jelangjulangController::class, 'updatedatadiri'])->name('update');
//menampilkan tiket setelah update data diri
Route::get('/tiket', [jelangjulangController::class, 'qrcode'])->name('tiket');
//menampilkan info user untuk staff panitia
Route::get('/info/{id}', jelangjulangController::class, 'info');
Route::get('/checkin/{id}', [jelangjulangController::class, 'checkin'])->name('checkin');
Route::get('/checkout/{id}', [jelangjulangController::class, 'checkout'])->name('checkout');
//menampilkan bukti transfer untuk dicek oleh admin
Route::get('/admin', function () {
    return view('admin');
});
Route::post('/admin', [jelangjulangController::class, 'admin']);
Route::get('/pelanggan', [jelangjulangController::class, 'pelanggan'])->name('pelanggan');
