<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Games routes
Route::get('games', [GameController::class, 'index']); // Получение списка игр
Route::post('games', [GameController::class, 'storeOrUpdate']); // Создание новой игры
Route::get('games/{game}', [GameController::class, 'show']); // Просмотр конкретной игры
Route::delete('games/{game}', [GameController::class, 'destroy']); // Удаление игры

// Genres routes
Route::get('genres', [GenreController::class, 'index']); // Получение списка жанров
Route::post('genres', [GenreController::class, 'storeOrUpdate']); // Создание нового жанра
Route::get('genres/{genre}', [GenreController::class, 'show']); // Просмотр конкретного жанра
Route::delete('genres/{genre}', [GenreController::class, 'destroy']); // Удаление жанра
