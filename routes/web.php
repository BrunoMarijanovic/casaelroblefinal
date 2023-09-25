<?php

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

Route::get('/', [App\Http\Controllers\ProjectController::class, 'index']);

Auth::routes([
    'register' => false
]);

Route::resource('/imgs', App\Http\Controllers\ImgController::class);
Route::resource('/normas', App\Http\Controllers\NormaController::class);
Route::resource('/precios', App\Http\Controllers\PrecioController::class);
Route::resource('/reservas', App\Http\Controllers\ReservaController::class);
Route::resource('/servicios', App\Http\Controllers\ServicioController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('locale/{locale}', function ($locale){
    session()->put('locale', $locale);
    return Redirect::back();
});