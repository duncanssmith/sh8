<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {

        return view('posts', [
            'posts' => $this->getPosts(),
//        'posts' => Post::all(), // lazy load
//        'posts' => Post::latest()->with('author')->get(), // order by time and eager load 'user' aliased to 'author' in the Post model
            'title' => 'All posts',
        ]);
    }

    public function show(Post $post)
    {
//        $post = cache()->remember("posts.{$slug}", 30, function() use ($slug) {
//            return Post::where('slug', $slug)->with('author')->firstOrFail();
//        });

        return view('post', [
            'post' => $post,
            'title' => 'A Post',
        ]);
    }

    protected function getPosts()
    {
        $posts = Post::latest();

        if (request('search')) {
            $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return $posts->get();
    }
}
