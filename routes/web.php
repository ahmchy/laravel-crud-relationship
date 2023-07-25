<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [PlayerController::class, 'index']);
Route::get('/create', [PlayerController::class, 'create']);
Route::delete('/{id}/delete', [PlayerController::class, 'delete']);
Route::get('/{id}/update', [PlayerController::class, 'update']);
// Route::put('/player/{id}/update-store', [PlayerController::class, 'updateStore']);
Route::get('/{id}/show', [PlayerController::class, 'show']);
Route::post('/store', [PlayerController::class, 'store']);
Route::get('/search', [PlayerController::class, 'search'])->name('search');

// Route::resource('/team', TeamController::class);