<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\logincontroller;
use Illuminate\Auth\Events\Logout;
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


//Route khusus halaman login
Route::get('/', [logincontroller::class, 'halaman_Login'])->name('halaman_Login');
Route::post('/auth', [logincontroller::class, 'authenticate'])-> name('authenticate');
Route::get('/logout', [logincontroller::class,'logout']) ->name('Logout');
Route::resource('/data-guru', GuruController::class);
Route::resource('/data-kelas', KelasController::class);
Route::get('/dashboard', function(){
    return view('admin.beranda');
});

