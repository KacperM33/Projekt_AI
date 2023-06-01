<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SweetsController;

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

Route::controller(SweetsController::class)->group(function () {
    Route::get('/shop', 'index')->name('shop.index');
    Route::get('/shop/{category}', 'shop')->name('shop.shop');
    Route::get('/news', 'news')->name('shop.news');
});
