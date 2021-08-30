<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\WorkController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Text;
use App\Models\User;
use App\Models\Work;
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

require __DIR__.'/auth.php';

Route::get('/laravel', function () {
    return view('laravel');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('admin/posts/create', [AdminPostController::class, 'create']);// ->middleware('admin');
Route::post('admin/posts', [AdminPostController::class, 'store'])->middleware('admin');

Route::get('admin/works/create', [WorkController::class, 'create'])->middleware('admin');
Route::post('admin/works', [WorkController::class, 'store'])->middleware('admin');


Route::get('admin/texts/create', [TextController::class, 'create'])->middleware('admin');
Route::post('admin/texts', [TextController::class, 'store'])->middleware('admin');

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories', [CategoryController::class, 'index'])->name('categories');
Route::get('categories/{category:slug}', [CategoryController::class, 'show']);
Route::get('category-posts/{category:slug}', [CategoryController::class, 'showPosts']);

Route::get('works', [WorkController::class, 'index'])->name('works');
Route::get('works/{work:slug}', [WorkController::class, 'show']);

Route::get('texts', [TextController::class, 'index'])->name('texts');
Route::get('texts/{text:slug}', [TextController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Admin Section
Route::middleware('can:admin')->group(function () {
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});

//    $post = cache()->remember("posts.slug", 30, function() use ($post->slug) {
//    $post = cache()->remember("posts.slug", 30, function() use ($post->slug) {
//        return Post::where('slug', $post->slug)->with('author')->firstOrFail();
//    });

//    return view('post', [
//        'post' => $post,
//    ]);
//})->where('slug', '[A-z_\-]+');

Route::get('/authors/{author:username}', function (User $author) {

    return view('posts', [
        'posts' => $author->posts->load(['author']),
        'title' => 'Posts by author',
    ]);
});

/*
Route::get('/works', function () {

    return view('works', [
        'works' => Work::all(),
        'title' => 'Works',
        'images' => self::IMAGES,
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
        'images' => self::IMAGES[$work->id],
//        'title' => $yamlFrontMatter->matter('title'),
//        'author' => $yamlFrontMatter->matter('author'),
//        'content' => $yamlFrontMatter->body(),

//        'basePath' => $basePath,
//        'appPath' => $appPath,
//        'resourcePath' => $resourcePath,
//        'publicPath' => $publicPath,
    ]);
})->where('slug', '[A-z_\-]+');
*/

/*
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
*/

//Route::get('/categories', function () {
//    return view('categories', [
//        'categories' => Category::all(),
//        'title' => 'Categories',
//    ]);
//});

//Route::get('categories/{category:slug}', function (Category $category) {
//    return view('posts', [
//        'posts' => $category->posts,
//        'currentCategory' => $category,
//        'categories' => Category::all()
//    ]);
//})->name('category');


//Route::get('/categories/{category}', function ($slug) {
//    $category = cache()->remember("categories.{$slug}", 30, function() use ($slug) {
//        return Category::where('slug', $slug)->firstOrFail();
//        return Category::with('works')->with('texts')->where('slug', $slug)->firstOrFail();
//    });

//    return view('category', [
//        'category' => $category,
//        'title' => 'A category',
//    ]);
//})->where('slug', '[A-z_\-]+');
