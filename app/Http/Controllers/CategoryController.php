<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all(),
            'title' => 'Categories',
        ]);
    }

    public function show(Category $category)
    {
        $slug = $category->slug;
        $category = cache()->remember("category.{$slug}", 30, function() use ($slug) {
            return Category::where('slug', $slug)->firstOrFail();
        });

        return view('.categories.show', [
            'works' => $category->works,
            'texts' => $category->texts,
            'currentCategory' => $category,
            'category' => $category,
            'categories' => Category::all(),
        ]);
    }
}
