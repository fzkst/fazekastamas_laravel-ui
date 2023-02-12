<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\OperaController;
use Illuminate\Support\Facades\Route;

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
   return view('home');
});

Route::get('success', function () {
    return view('errors/success');
});

Route::get('danger', function () {
    return view('errors/danger');
});

Route::resource('fruits', FruitController::class);

Route::resource('operas', OperaController::class);
