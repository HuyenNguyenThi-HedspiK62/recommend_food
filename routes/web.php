<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('todos/tab1', [App\Http\Controllers\TodosController::class, 'getTab1']);
Route::get('todos/tab2', [App\Http\Controllers\TodosController::class, 'getTab2']);
Route::get('tab1', [App\Http\Controllers\TodosController::class, 'Tab1']);
Route::get('tab2', [App\Http\Controllers\TodosController::class, 'Tab2']);
Route::get('/', [App\Http\Controllers\TodosController::class, 'tab1getHomepage']);
Route::get('/', [App\Http\Controllers\TodosController::class, 'tab2getHomepage']);
Route::get('todos/search', [App\Http\Controllers\TodosController::class, 'getsearch']);
Route::get('todos/search_food', [App\Http\Controllers\TodosController::class, 'getsearchfood'])->name('search_food');
Route::get('search_ngl', [App\Http\Controllers\TodosController::class, 'getsearchngl'])->name('search_ngl');
Route::get('todos/food/{stt}', [App\Http\Controllers\TodosController::class, 'getFood']);
Route::get('todos/food/{stt}/{nguyenlieuId}', [App\Http\Controllers\TodosController::class, 'getFoodfromNguyenlieu']);
Route::get('todos/fooddetail/{foodId}', [App\Http\Controllers\TodosController::class, 'foodDetail']);
Route::get('/', [App\Http\Controllers\TodosController::class, 'getdata']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'showallpost'])->name('showallpost');
Route::post('/home/user_food', [App\Http\Controllers\HomeController::class, 'showuserfood'])->name('showuserfood');

Route::get('upload', function () {
    return view('todos.post');
});

Route::post('/post', [App\Http\Controllers\TodosController::class, 'showpost'])->name('showpost');