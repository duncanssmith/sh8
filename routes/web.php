<?php

use App\Models\Post;
use App\Models\Work;
use App\Models\Category;
use App\Models\Text;
use App\Models\User;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

//Route::get('/', function () {
//    return view('laravel');
//});

Route::get('/duncan', function () {
    return view('test-tailwind');
});

Route::get('/laravel', function () {
    return view('laravel');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');
//    $post = cache()->remember("posts.slug", 30, function() use ($post->slug) {
//    $post = cache()->remember("posts.slug", 30, function() use ($post->slug) {
//        return Post::where('slug', $post->slug)->with('author')->firstOrFail();
//    });

//    return view('post', [
//        'post' => $post,
//    ]);
//})->where('slug', '[A-z_\-]+');

Route::get('/works', function () {

    return view('works', [
        'works' => Work::all(),
        'title' => 'Works',
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {

    return view('posts', [
        'posts' => $author->posts->load(['author']),
        'title' => 'Posts by author',
    ]);
});

Route::get('/works/{work}', function ($slug) {
//    $yamlFrontMatter = YamlFrontMatter::parse(file_get_contents(resource_path().'/views/post1.html'));

    $work = cache()->remember("works.{$slug}", 30, function() use ($slug) {
        return Work::where('slug', $slug)->firstOrFail();
    });

    return view('work', [
        'work' => $work,
        'title' => 'A work',
//        'title' => $yamlFrontMatter->matter('title'),
//        'author' => $yamlFrontMatter->matter('author'),
//        'content' => $yamlFrontMatter->body(),

//        'basePath' => $basePath,
//        'appPath' => $appPath,
//        'resourcePath' => $resourcePath,
//        'publicPath' => $publicPath,
    ]);
})->where('slug', '[A-z_\-]+');

Route::get('/texts', function () {
//    ddd(Text::all());

    return view('texts', [
        'texts' => Text::all(),
        'title' => 'Texts',
    ]);
});

Route::get('/texts/{text}', function ($slug) {
    $text = cache()->remember("texts.{$slug}", 30, function() use ($slug) {
        return Text::where('slug', $slug)->firstOrFail();
    });

    return view('text', [
        'text' => $text,
        'title' => 'A text',
    ]);
})->where('slug', '[A-z_\-]+');

Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::all(),
        'title' => 'Categories',
    ]);
});

Route::get('/categories/{category}', function ($slug) {
    $category = cache()->remember("categories.{$slug}", 30, function() use ($slug) {
//        return Category::where('slug', $slug)->firstOrFail();
        return Category::with('works')->with('texts')->where('slug', $slug)->firstOrFail();
    });

//    ddd($category);

    return view('category', [
        'category' => $category,
        'title' => 'A category',
    ]);
})->where('slug', '[A-z_\-]+');
