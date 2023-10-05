<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
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

Route::get('/info', function () {
    echo 'info';
});

Route::get('/news/NewsShow', [NewsController::class, 'show']);
Route::get('/news/NewsCreate', [NewsController::class, 'create']);
Route::get('/register', [RegisterController::class, 'index']);