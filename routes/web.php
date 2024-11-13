<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function (Post $posts) {
    return view('home', [
        "title" => "Home",
        'active' => 'home',
        "posts" => $posts->get()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'about',
        "name" => "Valentinus Rafael Gani",
        "email" => "valentinus.gani@binus.ac.id",
        "image" => "Kocheng.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

//route untuk single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post by Category: $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'user'),
    ]);
});

Route::get('/authors/{author}', function(User $author) {
    return view('posts', [
        'title' => "Post by Author: $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('category', 'user'),
    ]);
});
