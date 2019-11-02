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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', function () {
//     return 'Hello World.';
// });
/**
 * 后端接口
 */
Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::group(['prefix' => 'notice-dome'], function () {
        
        Route::get('index', 'NoticeDomeController@index');
        Route::get('index', function(){
            echo 'hello';
//        });
        Route::any('create', 'NoticeDomeController@create');
        Route::any('update/{id}', 'NoticeDomeController@update');
        Route::get('delete/{id}', 'NoticeDomeController@delete');
    });
});



