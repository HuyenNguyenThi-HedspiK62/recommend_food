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

Route::get('todos/tab1', 'TodosController@getTab1');
Route::get('todos/tab2', 'TodosController@getTab2');
Route::get('tab1', 'TodosController@Tab1');
Route::get('tab2', 'TodosController@Tab2');
Route::get('/', 'TodosController@tab1getHomepage');
Route::get('/', 'TodosController@tab2getHomepage');
Route::get('todos/search', 'TodosController@getsearch');
Route::get('search_food', 'TodosController@getsearchfood');
Route::get('todos/food/{stt}', 'TodosController@getFood');
Route::get('todos/food/{stt}/{nguyenlieuId}', 'TodosController@getFoodfromNguyenlieu');
Route::get('todos/fooddetail/{foodId}', 'TodosController@foodDetail');
Route::get('/', 'TodosController@getdata');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('upload', function () {
    return view('todos.post');
});

Route::post('/post', [App\Http\Controllers\TodoController::class, 'showpost'])->name('showpost');