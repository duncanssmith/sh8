<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Text;
use App\Models\Work;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminTextController extends Controller
{
    public function index()
    {
        return view('admin.texts.index', [
            'texts' => Text::paginate(50),
            'title' => 'Texts index',
            'index' => '/admin/texts',
            'create' => '/admin/texts/create',
        ]);
    }

    public function show(Text $text)
    {
        $slug = $text->slug;
        $text = cache()->remember("texts.{$slug}", 30, function() use ($slug) {
            return Text::where('slug', $slug)->firstOrFail();
        });

        return view('texts.show', [
            'title' => 'required',
            'slug' => ['required', Rule::unique('works', 'slug')->ignore($post->id)],
            'body' => 'required',
            'author' => 'required',
            'year' => 'required',
            'description' => 'required',
            'publication' => 'required',
            'publication_date' => 'required',
        ]);
    }

    public function create()
    {
        return view('admin.texts.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('texts', 'slug')],
            'body' => 'required',
            'author' => 'required',
            'year' => 'required',
            'description' => 'required',
            'publication' => 'required',
            'publication_date' => 'required',
        ]);

        Text::create($attributes);

        return redirect('/');

    }

    public function edit(Text $text)
    {
        return view('admin.texts.edit', ['text' => $text]);
    }

    public function update(Text $text)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('texts', 'slug')->ignore($text->id)],
            'body' => 'required',
            'author' => 'required',
            'year' => 'required',
            'description' => 'required',
            'publication' => 'required',
            'publication_date' => 'required',
        ]);

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $text->update($attributes);

        return back()->with('success', 'Text updated');
    }

    public function destroy(Text $text)
    {
        $text->delete();

        return back()->with('success', 'Text deleted');
    }
}
