<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class WorkController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        $admin = false;
        if (Auth::user()) {
            $admin = Auth::user()->username == 'duncanssmith' ? true : false;
        }

        return view('works.index', [
            'works' => Work::all(),
            'title' => 'Works',
            'userIsAdmin' => $admin
        ]);
    }

    /**
     * @param Work $work
     *
     * @return Factory|View
     * @throws \Exception
     */
    public function show(Work $work)
    {
        $slug = ($work->slug);
        $work = cache()->remember("works.{$slug}", 30, function() use ($slug) {
            return Work::where('slug', $slug)->firstOrFail();
        });

        return view('works.show', [
            'work' => $work,
            'title' => 'A work',
        ]);
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.works.create', [
            'route' => '/works'
        ]);
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

        return redirect('/works');
    }

}
