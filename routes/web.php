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

Route::get('/', [App\Http\Controllers\ProjectController::class, 'index'])->name('index');

Auth::routes([   
    'register' => false
]);

Route::resource('/imgs', App\Http\Controllers\ImgController::class);
Route::resource('/normas', App\Http\Controllers\NormaController::class);
Route::resource('/precios', App\Http\Controllers\PrecioController::class);
Route::resource('/reservas', App\Http\Controllers\ReservaController::class);
Route::resource('/servicios', App\Http\Controllers\ServicioController::class);
Route::resource('/diasminimos', App\Http\Controllers\DiasMinimoController::class);
Route::resource('/resenas', App\Http\Controllers\ResenaController::class);
Route::post('/resenas/habilitar/{id}', [App\Http\Controllers\ResenaController::class, 'habilitar'])->name('resena.habilitar');
Route::post('/resenas/deshabilitar/{id}', [App\Http\Controllers\ResenaController::class, 'deshabilitar'])->name('resena.deshabilitar');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/createReview', [App\Http\Controllers\ProjectController::class, 'formReview'])->name('create.review');
Route::post('/createReview/send', [App\Http\Controllers\ProjectController::class, 'sendReview'])->name('send.review');


Route::get('locale/{locale}', function ($locale){
    session()->put('locale', $locale);
    return Redirect::back();
});