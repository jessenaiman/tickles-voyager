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
    $posts = App\Post::all();
    return view('home', compact('posts'));
});

Route::get('post/{slug}', function ($slug) {
    $post = App\Post::where('slug', '=', $slug)->firstOrFail();
    return view('post', compact('post'));
});

Route::get('/music', function () {
    $pages = App\Page::all();
    return view('music', compact('pages'));
});

Route::get('/videos', function () {
    return view('music');
});

Route::get('/demo', function () {
    return view('demo');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*
|--------------------------------------------------------------------------
| Page Routes
|--------------------------------------------------------------------------
|
| This is the route when a user visits a single page
|
*/

Route::get('page/{slug}', 'PageController@read');
