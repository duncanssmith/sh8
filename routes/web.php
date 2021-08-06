<?php

use App\Models\Post;
use App\Models\Work;
use App\Models\Category;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::all(),
        'title' => 'all posts'
    ]);
});

Route::get('/posts/{post}', function (Post $post) {
    return view('post', [
        'post' => $post,
        'title' => 'one post'
    ]);
});


Route::get('/works', function () {
    return view('works', [
        'works' => Work::all(),
        'title' => 'all works'
    ]);
});

Route::get('/works/{work}', function (Work $work) {
    return view('work', [
        'work' => $work,
        'title' => 'one work'
    ]);
});

Route::get('/category', function () {
    return view('categories', [
        'categories' => Category::all(),
        'title' => 'all categories'
    ]);
});

Route::get('/categories/{category}', function (Category $category) {
    return view('category', [
        'category' => $category,
        'title' => 'one category'
    ]);
});
