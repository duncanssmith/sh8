<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminWorkController extends Controller
{
    public function index()
    {
        return view('admin.works.index', [
            'works' => Work::paginate(50),
            'title' => 'Works index',
            'index' => '/admin/works',
            'create' => '/admin/works/create',
        ]);
    }

    public function show(Work $post)
    {
        $slug = $post->slug;
        $post = cache()->remember("works.{$slug}", 30, function() use ($slug) {
            return Work::where('slug', $slug)->firstOrFail();
        });

        return view('works.show', [
            'post' => $post,
            'title' => 'A post',
        ]);
    }

    public function create()
    {
        return view('admin.works.create', ['cancel' => '/works']);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('works', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Work::create($attributes);

        return redirect('/');

    }

    public function edit(Work $work)
    {
        return view('admin.works.edit', ['work' => $work]);
    }

    public function update(Work $work)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('works', 'slug')->ignore($work->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Work updated');
    }

    public function destroy(Work $work)
    {
        $work->delete();

        return back()->with('success', 'Work deleted');
    }
}
