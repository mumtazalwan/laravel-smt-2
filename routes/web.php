<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\RegisterController;
use App\http\Controllers\LoginController;
use App\http\Controllers\DashboardController;
use App\Models\BookModel;
use App\http\Controllers\BookController;
use App\http\Controllers\PublisherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/add', [RegisterController::class, 'addUser']);

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['prefix' => 'dashboard'], function(){

    Route::group(['prefix' => 'books'], function(){
        Route::get('/all', [DashboardController::class, 'index'])->middleware('auth');
        Route::get('/publisher', [DashboardController::class, 'index2'])->middleware('auth');

        Route::get('/detail/{book}', [DashboardController::class, 'show'])->middleware('auth'); // detail book
        Route::get('detailPublisher/{publisher}', [DashboardController::class, 'show2'])->middleware('auth'); // detail publisher

        Route::get('/create', [DashboardController::class, 'create'])->middleware('auth'); // create data
        Route::post('/add', [DashboardController::class, 'store'])->middleware('auth'); // add data
        Route::delete('/delete/{book}', [DashboardController::class, 'destroy'])->middleware('auth'); // delet data
        Route::get('/edit/{book}', [DashboardController::class, 'edit'])->middleware('auth'); // edit data
        Route::post('/update/{book}', [DashboardController::class, 'update'])->middleware('auth'); // edit data
    });

    Route::get('/', function () {
        return view('dashboard.index');
    })->middleware('auth');
});

Route::group(['prefix' => 'books'], function(){
    Route::get('/all', [BookController::class, 'index']);
    Route::get('/publisher', [PublisherController::class, 'index']);

    Route::get('/detail/{book}', [BookController::class, 'show']); // detail book
    Route::get('detailPublisher/{publisher}', [PublisherController::class, 'show']); // detail publisher

    Route::get('/create', [BookController::class, 'create']); // create data
    Route::post('/add', [BookController::class, 'store']); // add data
    Route::delete('/delete/{book}', [BookController::class, 'destroy']); // delet data
    Route::get('/edit/{book}', [BookController::class, 'edit']); // edit data
    Route::post('/update/{book}', [BookController::class, 'update']); // edit data
});


