<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

// Route::get('/profile/{name}', function ($name) {
//     return "Welcome ".$name;
// });

// Crear un controlador
// Route::get('/profile/{name}', 'ProfileController@index');
// Route::get('/profile/{name}', 'App\Http\Controllers\ProfileController@index');

// Route::get('/profile/{name}', [ProfileController::class, 'index']);
Route::get('/profile/{name}', [ProfileController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
