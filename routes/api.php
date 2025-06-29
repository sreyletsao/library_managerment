<?php
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use \App\Http\Controllers\BooksController;
use App\Http\Controllers\BorrowController;


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





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('stocks', StockController::class);
Route::apiResource('user', UserController::class);
Route::apiResource('category', CategoryController::class);
Route::apiResource('books', BooksController::class);
Route::apiResource('borrow', BorrowController::class);
