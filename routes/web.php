<?php

use App\Models\Post;
use App\Models\Work;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
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
        'title' => 'All posts'
    ]);
});

Route::get('/posts/{post}', function ($slug) {
    $post = cache()->remember("posts.{$slug}", 30, function() use ($slug) {
        return Post::where('slug', $slug)->firstOrFail();
    });

    return view('post', [
        'post' => $post,
    ]);
})->where('slug', '[A-z_\-]+');

Route::get('/works', function () {
    return view('works', [
        'works' => Work::all()
    ]);
});

Route::get('/works/{work}', function ($slug) {
    $work = cache()->remember("works.{$slug}", 30, function() use ($slug) {
        return Work::where('slug', $slug)->firstOrFail();
    });

    $basePath = base_path();
    $appPath = app_path();
    $resourcePath = resource_path();
    $publicPath = public_path();

    return view('work', [
        'work' => $work,
        'basePath' => $basePath,
        'appPath' => $appPath,
        'resourcePath' => $resourcePath,
        'publicPath' => $publicPath,
    ]);
})->where('slug', '[A-z_\-]+');

Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category}', function ($slug) {
    $category = cache()->remember("categories.{$slug}", 30, function() use ($slug) {
        return Category::where('slug', $slug)->firstOrFail();
    });

    return view('category', [
        'category' => $category
    ]);
})->where('slug', '[A-z_\-]+');
