<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});
Route::get('/test', function () {
    //CARA MENGAMBIL DATA ENV
    $kegiatan = env('KEGIATAN', 'Tidak Ada Kegiatan');
    return $kegiatan;
});
Route::get('/test_route', [TestController::class, 'index']);
Route::post('/test_route', [TestController::class, 'store']);

Route::get('/customer/insert', [CustomerController::class, 'insert']);
Route::get('/customer/select-all', [CustomerController::class, 'select_all']);
Route::get('/customer/select/{id}', [CustomerController::class, 'select_by_id']);
Route::get('/customer/update/{id}', [CustomerController::class, 'update']);
Route::get('/customer/delete/{id}', [CustomerController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('/mata-kuliah', MataKuliahController::class);
