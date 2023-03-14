<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get("/home" ,[AuthorController::class , "index"])->middleware('auth');

Route::get("/find" ,[AuthorController::class , "index"]);

Route::post("/find" ,[AuthorController::class , "find"]);
Route::get("/add" ,[AuthorController::class , "add"]);
Route::post("/add" ,[AuthorController::class , "create"]);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);

// 追記：ここまで




Route::get('/', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';//これが追加
