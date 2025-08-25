<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// CRUD de usuários
Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

// autenticação
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// rota que mostra o formulário de edição (esqueci senha -> editar dados)
Route::get('password/reset', [ResetPasswordController::class, 'showEditForm'])->name('password.request');
// rota que processa a atualização dos dados (email/nome/senha)
Route::post('password/reset', [ResetPasswordController::class, 'update'])->name('password.update');

// rotas de usuários protegidas
Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
});