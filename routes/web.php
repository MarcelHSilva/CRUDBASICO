<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ColaboradoresController;


Route::get('/',[UserController::class, 'index'])->name('user.index');

Route::get('/show-user/{user}',[UserController::class, 'show'])->name('user.show');

Route::get('/create-user',[UserController::class, 'create'])->name('user.create');

Route::post('/store-user',[UserController::class, 'store'])->name('user-store');

Route::get('/edit-user/{user}',[UserController::class, 'edit'])->name('user.edit');

Route::put('/update-user/{user}',[UserController::class, 'update'])->name('user.update');

Route::delete('/destroy-user/{user}',[UserController::class, 'destroy'])->name('user.destroy');

Route::get('/colaboradores',[ColaboradoresController::class, 'colaboradores'])->name('colaboradores.index');

Route::get('/create-colaborador',[ColaboradoresController::class, 'create'])->name('colaboradores.create');

Route::get('/detalhes-colaboradores{colaborador}',[ColaboradoresController::class, 'detalhes'])->name('colaboradores.mostrar');

Route::post('/store-colaborador',[ColaboradoresController::class, 'store'])->name('colaboradores.store');

Route::get('/edit-colaborador/{colaborador}',[ColaboradoresController::class, 'edit'])->name('colaboradores.edit');

Route::put('/update-colaborador/{colaborador}',[ColaboradoresController::class, 'update'])->name('colaboradores.update');

Route::delete('/destroy-colaborador/{colaborador}',[ColaboradoresController::class, 'destroy'])->name('colaboradores.destroy');


