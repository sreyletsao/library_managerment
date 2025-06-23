<?php
use App\Http\Controllers\StockController;
use App\Http\Controllers\BorrowController;

use \App\Http\Controllers\BooksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
<<<<<<< HEAD

=======
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
>>>>>>> aa97c71fbb6f8125d4d4ca1e9367c71e306b7d97

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
<<<<<<< HEAD
Route::apiResource('books', BooksController::class);
Route::apiResource('borrow', BorrowController::class);
=======
Route::apiResource('user', UserController::class);
Route::apiResource('category', CategoryController::class);
>>>>>>> aa97c71fbb6f8125d4d4ca1e9367c71e306b7d97
