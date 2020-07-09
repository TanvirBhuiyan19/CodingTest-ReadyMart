<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $sectionones = DB::table('posts')->where('action', 1)->where('section', 1)->orderBy('id', 'DESC')->get();
    $sectiontwos = DB::table('posts')->where('action', 1)->where('section', 2)->orderBy('id', 'DESC')->get();
    return view('welcome', compact('sectiontwos', 'sectionones'));
});

Route::get('/post/{title}', 'PostController@postView');
Route::get('/video/{title}', 'PostController@videoView');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/create', 'HomeController@createPostVideo');
Route::post('/savePost', 'PostController@postSave');
