<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', [AuthorController::class, 'index']);
Route::get('/find', [AuthorController::class, 'find']);
Route::post('/find', [AuthorController::class, 'search']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
// 追記：ここから
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
// 追記：ここまで