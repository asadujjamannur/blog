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


// Route::get('/backend', function(){
//     return view('backend/calender');
// });



Route::get('/', 'master@master');
Route::get('/blog', 'master@blogPage');

Route::get('/dashboard', 'backendController@backend');
Route::get('/create', 'backendController@create');

