<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TextController extends Controller
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

        return view('texts.index', [
            'texts' => Text::latest()->filter(request()->only('search'))->paginate(3),
//            'texts' => Text::all(),
            'title' => 'Texts',
            'userIsAdmin' => $admin,
        ]);
    }

    /**
     * @param Text $text
     *
     * @return Factory|View
     * @throws \Exception
     */
    public function show(Text $text)
    {
        $slug = ($text->slug);
        $text = cache()->remember("texts.{$slug}", 30, function() use ($slug) {
            return Text::where('slug', $slug)->firstOrFail();
        });

        $admin = false;
        if (Auth::user()) {
            $admin = Auth::user()->username == 'duncanssmith' ? true : false;
        }

        return view('texts.show', [
            'text' => $text,
            'title' => 'A text',
            'userIsAdmin' => $admin,
        ]);
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        $admin = false;
        if (Auth::user()) {
            $admin = Auth::user()->username == 'duncanssmith' ? true : false;
        }

        return view('admin.texts.create', [
            'route' => '/texts',
            'userIsAdmin' => $admin,
        ]);
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

        return redirect('/texts');
    }

}
