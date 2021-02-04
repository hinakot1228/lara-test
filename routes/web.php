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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/seedtech', function () {
    return view('seedtech');
});

Route::get('/seedtech/seed', function () {
    return view('seedtech.seed');
    // return view('フォルダ名.ファイル名');
});

Route::get('/tweets', 'TweetsController@index')->name('tweets.index');

// ルーティングの書き方
// /というurlのリクエストが来た時に、welcome.blade.phpを表示せよ

// view関数 → resources/viewsフォルダを参照する