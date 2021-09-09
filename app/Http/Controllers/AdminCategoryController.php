<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryWork;
use App\Models\Work;
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
        return view('admin.categories.create');
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

    public function assign_work(Work $work)
    {
        // store
        $slug = $work->slug;
        $work = cache()->remember("works.{$slug}", 30, function() use ($slug) {
            return Work::where('slug', $slug)->firstOrFail();
        });

        $links = $work->categories;
        $categories = Category::all();

        $checked = [];
        foreach ($work->categories as $link){
            $checked[] = $link->pivot->category_id;
        }

        $checked = array_flip($checked);

        // show the edit form and pass the group
        return view('admin.works.assign', [
            'work' => $work,
            'entity' => 'work',
            'links' => $links,
            'checked' => $checked,
            'categories' => $categories,
            'title' => 'Assign the work to a category or categories',
        ]);
    }

    public function save_assigned_work()
    {
        $work = Work::find($_POST['work_id']);

        // only sync the pivot table data if there are any selected categories
        if (!empty($_POST['categories_selected'])) {
            $work->categories()->sync(array_keys($_POST['categories_selected']));
        } else {
            $work->categories()->detach();
        }

        return back()->with('success', 'Work assigned to selected category(ies)');
    }
}
