<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    // \Illuminate\Support\Facades\DB::listen(function ($query) {
    //     logger($query->sql);
    // });

    return view('post.posts', [
        'posts' => Post::latest()->with('category', 'author')->get() // latest reverse list = Orderby
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post.post', [
        'post' => $post
    ]);
});

Route::get( '/categories/{category:slug}', function  (Category $category) {
    return view('post.posts', [
        'posts' => $category->posts->load(['category', 'author'])// ->load(['category', 'author']) n+1 resolved Binnen eigen Model
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('post.posts', [
        'posts' => $author->posts->load(['category', 'author']) // ->load(['category', 'author']) n+1 resolved Binnen eigen Model
    ]);
});


