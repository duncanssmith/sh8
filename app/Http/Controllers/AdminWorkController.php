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
//        dd(request());
        return view('admin.works.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('works', 'slug')],
            'media' => 'required',
            'dimensions' => 'required',
            'work_date' => 'required',
        ]);

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
            'media' => 'required',
            'dimensions' => 'required',
            'work_date' => 'required',
        ]);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $work->update($attributes);

        return back()->with('success', 'Work updated');
    }

    public function destroy(Work $work)
    {
        $work->delete();

        return back()->with('success', 'Work deleted');
    }
}
