<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use App\Models\File;

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
Route::get('/', [FileController::class, 'index']);


Route::get('/files/create', [FileController::class, 'create']);

Route::post('/files', [FileController::class, 'store']);

Route::get('/files/{file}/edit', [FileController::class, 'edit']);

Route::put('/files/{file}', [FileController::class, 'update']);

Route::delete('/files/{file}', [FileController::class, 'destroy']);

Route::get('/files/{file}', [FileController::class, 'show']);