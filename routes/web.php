<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

// Rota padrão para a página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rotas para o CRUD de livros
Route::resource('livros', LivroController::class);
