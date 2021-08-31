<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $admin = false;
        if (Auth::user()) {
            $admin = Auth::user()->username == 'duncanssmith' ? true : false;
        }

        return view('categories.index', [
            'categories' => Category::all(),
            'title' => 'Categories',
            'userIsAdmin' => $admin,
        ]);
    }

    public function show(Category $category)
    {
        $slug = $category->slug;
        $category = cache()->remember("category.{$slug}", 30, function() use ($slug) {
            return Category::where('slug', $slug)->firstOrFail();
        });

        $admin = false;
        if (Auth::user()) {
            $admin = Auth::user()->username == 'duncanssmith' ? true : false;
        }

        return view('categories.show', [
            'works' => $category->works,
            'texts' => $category->texts,
            'currentCategory' => $category,
            'category' => $category,
            'categories' => Category::all(),
            'userIsAdmin' => $admin,
        ]);
    }
}
