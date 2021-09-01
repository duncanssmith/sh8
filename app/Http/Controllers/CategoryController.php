<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

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

    /**
     * @return Factory|View
     */
    public function create()
    {
        $admin = false;
        if (Auth::user()) {
            $admin = Auth::user()->username == 'duncanssmith' ? true : false;
        }

        return view('admin.categories.create', [
            'route' => '/categories',
            'userIsAdmin' => $admin,
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'slug' => ['required', Rule::unique('categories', 'slug')],
        ]);

        Category::create($attributes);

        return redirect('/categories');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Category $category)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'slug' => ['required', Rule::unique('categories', 'slug')->ignore($category->id)],
        ]);

        $category->update($attributes);

        return back()->with('success', 'Category updated');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with('success', 'Category Deleted!');
    }

}
