<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FuaController;
use App\Http\Controllers\UtilController;

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
    return view('welcome');
});
  
Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('fuas', FuaController::class);

    Route::get('reporteFUA/{fua}', [FuaController::class, 'reporteFUA'])->name('reporteFUA');

    Route::get('reporteFUA2/{fua}', [FuaController::class, 'reporteFUA2'])->name('reporteFUA2');
});

Route::get('/consultaDNI/{dni}', [UtilController::class, 'consultaDNI'])->name('consultaDNI');
Route::get('/consultaIPRESS/{codigo}', [UtilController::class, 'consultaIPRESS'])->name('consultaIPRESS');
