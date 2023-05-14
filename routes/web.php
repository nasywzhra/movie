<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/movie', [MovieController::class, 'index']);
Route::get('/movie/{id}', [MovieController::class, 'show']);
Route::get('/movie/data/create', [MovieController::class, 'create']);
Route::post('/movie', [MovieController::class, 'store']);
Route::get('/movie/{id}/edit', [MovieController::class, 'edit']);
Route::put('/movie/{id}', [MovieController::class, 'update']);
Route::delete('/movie/{id}', [MovieController::class, 'destroy']);

