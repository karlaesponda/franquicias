<?php

use App\Http\Controllers\CommentController;
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



//Principal
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/all',[HomeController::class, 'all'])->name('home.all');

//Franquicias

Route::resource('franquicias', FranquiciaController::class)
                ->except('show')
                ->names('franquicias');


//Comentarios
Route::resource('comments', CommentController::class)
            ->only('index', 'destroy')
            ->names('comments');

//Ver franquicias
Route::get('franquicia/{franquicia}', [FranquiciaController::class, 'show'])->name('franquicias.show');

//Guardar comentarios
Route::get('/comment', [CommentController::class, 'store']) ->name('comments.store');
Auth::routes();


//Route::get('/franquicias', [FranquiciaController::class, 'index'])->name('franquicias.index');
//Route::get('/franquicias/create', [FranquiciaController::class, 'create'])->name('franquicias.create');
//Route::post('/franquicias', [FranquiciaController::class, 'store'])->name('franquicias.store');
//Route::get('/franquicias/{franquicia}/edit', [FranquiciaController::class, 'edit'])->name('franquicias.edit');
//Route::put('/franquicias/{franquicia}', [FranquiciaController::class, 'update'])->name('franquicias.update');
//Route::delete('/franquicias/{franquicia}', [FranquiciaController::class, 'destroy'])->name('franquicias.destroy');
