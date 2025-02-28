<?php

use App\Http\Controllers\TestamentoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\VersiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/testamento', [TestamentoController::class, 'index']);
Route::get('/testamento/{id}', [TestamentoController::class, 'show']);
Route::put('/testamento/{id}', [TestamentoController::class, 'update']);
Route::post('/testamento', [TestamentoController::class, 'store']);
Route::delete('/testamento/{id}', [TestamentoController::class, 'destroy']);

Route::get('/livro', [LivroController::class, 'index']);
Route::get('/livro/{id}', [LivroController::class, 'show']);
Route::put('/livro/{id}', [LivroController::class, 'update']);
Route::post('/livro', [LivroController::class, 'store']);
Route::delete('/livro/{id}', [LivroController::class, 'destroy']);

Route::get('/versiculo', [VersiculoController::class, 'index']);
Route::get('/versiculo/{id}', [VersiculoController::class, 'show']);
Route::put('/versiculo/{id}', [VersiculoController::class, 'update']);
Route::post('/versiculo', [VersiculoController::class, 'store']);
Route::delete('/versiculo/{id}', [VersiculoController::class, 'destroy']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
