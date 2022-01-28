<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
    return view('posts.posts', [
        'posts' => Post::latest()->with(['category', 'author'])->get()
    ]);
});

Route::get('/posts/{post}', function (Post $post) {
    return view('posts.post', [
        'post' => $post
    ]);
});

Route::get('/categories/{category}', function (Category $category) {
    return view('categories.category', [
        'category' => $category,
        'posts' => $category->posts
    ]);
});

Route::get('/authors/{author}', function (User $author) {
    return view('posts.posts', [
        'posts' => $author->posts
    ]);
});