<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\Livro;
use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;

// Rota para mostrar o formulário de login
Route::get('/', [Login::class, 'showLoginForm'])->name('login');

// Rota para processar o login
Route::post('/', [Login::class, 'login']);

// Rota para logout
Route::post('/logout', [Login::class, 'logout'])->name('logout');

Route::get('/listar-livros', [LivroController::class, 'index'])->name('livro.listar');
Route::get('/editar-livros', [LivroController::class, 'edit'])->name('livro.editar');
Route::get('/remover-livros', [LivroController::class, 'destroy'])->name('livro.remover');
Route::get('/adicionar-livros', [LivroController::class, 'create'])->name('livro.adicionar');

// Páginas protegidas
Route::middleware('auth')->group(function () {
    Route::get('/bibliotecario', function () {
        return view('page.bibliotecario');
    })->name('bibliotecario');

    Route::get('/usuario', function () {
        return view('page.usuario');
    })->name('usuario');
});

