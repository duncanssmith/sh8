<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        // 'posts' => Post::latest()->with('author')->with('category')->filter(request()->only('search'))->get(),
        // 'posts' => Post::all(), // lazy load
        // 'posts' => Post::latest()->with('author')->get(), // order by time and eager load 'user' aliased to 'author' in the Post model
        //  return Post::latest()->filter(request()->only('search'))->paginate(3);
        $admin = false;
        if (Auth::user()) {
            $admin = Auth::user()->username == 'duncanssmith' ? true : false;
        }

        return view('posts.index', [
            'posts' => Post::latest()->filter(request()->only('search')
            )->paginate(6),
            'title' => 'Posts',
            'userIsAdmin' => $admin
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

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('posts.create', [
            'route' => '/'
        ]);
    }

    public function store()
    {
        $path = request()->file('thumbnail')->store('storage/thumbnails');

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('storage/thumbnails');

        Post::create($attributes);

//        Post::create([
//            'user_id' => $attributes['user_id'],
//            'category_id' => $attributes['category_id'],
//            'title' => $attributes['title'],
//            'slug' => $attributes['slug'],
//            'excerpt' => $attributes['excerpt'],
//            'body' => $attributes['body'],
//        ]);
        return redirect('/');

    }

}
