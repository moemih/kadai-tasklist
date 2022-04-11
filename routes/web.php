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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
//トップページはタスクリストの「一覧」と同じページにルーティング
Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');