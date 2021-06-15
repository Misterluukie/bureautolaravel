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
    $posts = DB::table('posts')->where('published', 1)->get();

    //ddd($post);

    return view('welcome', [
        'posts' => $posts

    ]);

});

Route::get('/projecten', function () {
    $projecten = DB::table('posts')->where('published', 1)->get();

    return view('projecten', [
        'projecten' => $projecten
    ]);

});

Route::get('/posts/{post}', function ($slug) {
    //$post = DB::select('SELECT title FROM posts WHERE title = ?', [$slug]);
    $post = DB::table('posts')->where(
        [
            'title' => $slug,
            'published' => 1
        ]
    )->first();

    //ddd($post->title);

    return view('post', [
        'postTitle' => $post->title,
        'postContent' => $post->content
    ]);
});
