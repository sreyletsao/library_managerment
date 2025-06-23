<?php
<<<<<<< HEAD
use App\Http\Controllers\StockController;

=======
use \App\Http\Controllers\BooksController;
>>>>>>> 6b29979420e0492c56ccef5989c42bb0d42c4cb0
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


<<<<<<< HEAD
Route::apiResource('stocks', StockController::class);
=======
Route::apiResource('books', BooksController::class);
>>>>>>> 6b29979420e0492c56ccef5989c42bb0d42c4cb0
