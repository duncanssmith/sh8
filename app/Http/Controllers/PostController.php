<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {

        return view('posts.index', [
            'posts' => Post::latest()->filter(request()->only('search'))->paginate(3),
            'title' => 'Posts',
        ]);
    }

    /**
     * @param Post $post
     * @return Factory|View
     */
    public function show(Post $post)
    {
        $slug = $post->slug;
        $post = cache()->remember("posts.{$slug}", 30, function() use ($slug) {
            return Post::where('slug', $slug)->firstOrFail();
        });

        return view('posts.show', [
            'post' => $post,
            'title' => 'A post',
        ]);
    }
}
