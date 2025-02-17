<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/book', [BookController::class, 'index']);
Route::get('/api/book/{id}', [BookController::class, 'show']);
Route::put('/api/book/{id}', [BookController::class, 'update']);
Route::post('/api/book', [BookController::class, 'store']);
Route::delete('/api/book/{id}', [BookController::class, 'destroy']);


Route::get('/book/list', [BookController::class, 'listview']);
