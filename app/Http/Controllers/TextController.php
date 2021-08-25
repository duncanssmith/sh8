<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TextController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('texts', [
            'texts' => Text::all(),
            'title' => 'Texts',
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

        return view('text', [
            'text' => $text,
            'title' => 'A text',
        ]);
    }
}
