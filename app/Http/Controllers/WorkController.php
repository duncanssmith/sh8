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
        return view('works.index', [
            'works' => Work::latest()->filter(request()->only('search'))->paginate(3),
            'title' => 'Works',
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
}
