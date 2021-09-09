<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{

    /**
     * This is the publicly viewable page, a page of works and/or texts
     * identified by the category
     */
    public function home(Category $category)
    {
        $slug = $category->slug;
        $category = cache()->remember("category.{$slug}", 30, function() use ($slug) {
            return Category::where('slug', $slug)->firstOrFail();
        });

        // show the view and pass the group to it
        return view('home.home', [
            'category' => $category,
            'works'  => $category->works,
            'texts'  => $category->texts,
            'currentCategory' => $category,
            'categories' => Category::all(),
        ]);
    }


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

        return view('categories.show', [
            'category' => $category,
            'works' => $category->works,
            'texts' => $category->texts,
            'currentCategory' => $category,
            'categories' => Category::all(),
        ]);
    }
}
