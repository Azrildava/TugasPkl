<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
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
    return view('layouts.backend');
});

Route::get('data', function () {
    return view('data');
});
Auth::routes(
    ['register'=> false]
);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('brand', BrandController::class);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
