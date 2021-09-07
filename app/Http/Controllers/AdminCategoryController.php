<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::paginate(50),
            'title' => 'Categories index',
            'index' => '/admin/categories',
            'create' => '/admin/categories/create',
        ]);
    }

    public function show(Category $category)
    {
        $slug = $category->slug;
        $category = cache()->remember("categories.{$slug}", 30, function() use ($slug) {
            return Category::where('slug', $slug)->firstOrFail();
        });

        return view('categories.show', [
            'category' => $category,
            'title' => 'A category',
        ]);
    }

    public function create()
    {
        return view('admin.categories.create', ['cancel' => '/categories']);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'slug' => ['required', Rule::unique('categories', 'slug')],
        ]);

        Category::create($attributes);

        return redirect('/');
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

        return back()->with('success', 'Category deleted');
    }
}
