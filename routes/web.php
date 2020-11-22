<?php

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
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});



 
Route::get('/pizzas', 'App\Http\Controllers\PizzaController@index')->name('pizzas.index')->middleware('auth');

Route::get('/pizzas/create', 'App\Http\Controllers\PizzaController@create')->name('pizzas.create');

Route::post('/pizzas', [PizzaController::class, 'store'])->name('pizzas.store');

Route::get('/pizzas/{id}', 'App\Http\Controllers\PizzaController@show')->name('pizzas.show')->middleware('auth');

Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');

Auth::routes([
    'register' => false   //disable register
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
