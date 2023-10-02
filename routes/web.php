<?php

use App\Http\Controllers\FranquiciaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

//Principal
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/all',[HomeController::class, 'all'])->name('home.all');

//Franquicias
Route::get('/franquicias', [FranquiciaController::class, 'index'])->name('franquicias.index');
Route::get('/franquicias/create', [FranquiciaController::class, 'create'])->name('franqucia.create');
Route::post('/franquicias', [FranquiciaController::class, 'store'])->name('franquicia.store');