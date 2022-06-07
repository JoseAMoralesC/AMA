<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'index']);
//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

Route::middleware(['auth.admin'])->name('admin.')->prefix('/admin')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\Index\IndexController::class,'index'])->name('index');
    //Route::get('disciplinas', [App\Http\Controllers\Admin\Disciplina\IndexController::class,'index'])->name('disciplinas.index');

    Route::prefix('/disciplinas/')->name('disciplinas.')->group(function(){
        Route::get('', [App\Http\Controllers\Admin\Disciplina\IndexController::class,'index'])->name('index');
        Route::get('/indexAjax', [App\Http\Controllers\Admin\Disciplina\IndexController::class,'indexAjax'])->name('indexAjax');
        Route::get('/create', [App\Http\Controllers\Admin\Disciplina\CreateController::class,'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\Disciplina\EditController::class,'edit'])->name('edit');
        Route::get('/show/{id}', [App\Http\Controllers\Admin\Disciplina\ShowController::class,'show'])->name('show');
        Route::post('/store', [App\Http\Controllers\Admin\Disciplina\StoreController::class,'store'])->name('store');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\Disciplina\UpdateController::class,'update'])->name('update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\Disciplina\DestroyController::class,'destroy'])->name('destroy');
    });

    Route::prefix('/estilos/')->name('estilos.')->group(function(){
        Route::get('', [App\Http\Controllers\Admin\Estilo\IndexController::class,'index'])->name('index');
        Route::get('/indexAjax', [App\Http\Controllers\Admin\Estilo\IndexController::class,'indexAjax'])->name('indexAjax');
        Route::get('/create', [App\Http\Controllers\Admin\Estilo\CreateController::class,'create'])->name('create');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\Estilo\EditController::class,'edit'])->name('edit');
        Route::get('/show/{id}', [App\Http\Controllers\Admin\Estilo\ShowController::class,'show'])->name('show');
        Route::post('/store', [App\Http\Controllers\Admin\Estilo\StoreController::class,'store'])->name('store');
        Route::put('/update/{id}', [App\Http\Controllers\Admin\Estilo\UpdateController::class,'update'])->name('update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\Admin\Estilo\DestroyController::class,'destroy'])->name('destroy');
    });

    Route::prefix('usuarios/')->name('usuarios.')->group(function(){

    });
});

Route::middleware(['auth.normal'])->name('usuario.')->prefix('/usuario')->group(function () {
    Route::get('', [App\Http\Controllers\Normal\Index\IndexController::class,'index'])->name('index');
});

//Route::get('/admin', [App\Http\Controllers\Admin\Index\IndexController::class,'index'])->middleware('auth.admin')->name('admin.index');
//Route::get('/usuario', [App\Http\Controllers\Admin\Index\IndexController::class,'index'])->middleware('auth.normal')->name('normal.index');

