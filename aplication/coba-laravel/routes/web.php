<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        // "title1" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        // "title1" => "about",
        "name" => "Ica Natasya",
        "email" => "icanatasya30@gmail.com",
        "image" => "contoh.jpeg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// halaman categories
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Category',
        'categories' => Category::all()
    ]);
});

// halaman category
// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' => "Post by Category : $category->name",
//         // 'title1'  => "categories",
//         'posts' => $category->posts->load('category', 'author'),

//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post by Author : $author->name",
//         'posts' => $author->posts->load('category', 'author'),

//     ]);
// });

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);