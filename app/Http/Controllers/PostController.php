<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        return view('posts', [
//            'posts' => Post::latest()->with('author')->with('category')->filter(request()->only('search'))->get(),
            'posts' => Post::latest()->filter(request()->only('search'))->get(),
//        'posts' => Post::all(), // lazy load
//        'posts' => Post::latest()->with('author')->get(), // order by time and eager load 'user' aliased to 'author' in the Post model
            'title' => 'Posts',
        ]);
    }
//
    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
//        $post = cache()->remember("posts.{$slug}", 30, function() use ($slug) {
//            return Post::where('slug', $slug)->with('author')->firstOrFail();
//        });

        return view('post', [
            'post' => $post,
            'title' => 'A post',
        ]);
    }
}
