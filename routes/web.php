<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', [UsuariosController::class, 'index']);
Route::get('/usuario/create',[UsuariosController::class, 'create'])->name('users.create');
Route::post('/usuario/create',[UsuariosController::class, 'store'])->name('users.store');
Route::get('/usuario/edit/{id}',[UsuariosController::class, 'edit'])->name('users.edit');
Route::put('/usuario/edit',[UsuariosController::class, 'update'])->name('users.update');
Route::delete('/usuario/delete/{id}',[UsuariosController::class, 'delete'])->name('users.delete');
