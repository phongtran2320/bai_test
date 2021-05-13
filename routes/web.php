<?php

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

use App\Http\Controllers\TestController;

Route::get('form','TestController@form')->name('form');

Route::post('post','TestController@post')->name('post');


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{name}',function($name){
    return "hello ".$name;
});






Route::prefix('admin')->group(function () {
    Route::get('g1','TestController@a')->name('a');

    Route::get('g2/{name}','TestController@b')->name('b');

    
    
   

    
});

