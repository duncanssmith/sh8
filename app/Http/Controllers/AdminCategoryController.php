<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryWork;
use App\Models\CategoryText;
use App\Models\Text;
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
        $slug = $work->slug;
        $work = cache()->remember("works.{$slug}", 30, function() use ($slug) {
            return Work::where('slug', $slug)->firstOrFail();
        });

        $categories = Category::all();

        $checked = [];
        foreach ($work->categories as $link){
            $checked[] = $link->pivot->category_id;
        }

        $checked = array_flip($checked);

        $linkNames = [];
        foreach($work->categories as $link) {
            $linkNames[] = $link->name;
        }

        // show the edit form and pass the group
        return view('admin.works.assign', [
            'title' => 'Assign the work to a category or categories',
            'work' => $work,
//            'entity' => 'work',
            'checked' => $checked,
            'categories' => $categories,
            'linkNames' => $linkNames,
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

    public function assign_text(Text $text)
    {
        $slug = $text->slug;
        $text = cache()->remember("texts.{$slug}", 30, function() use ($slug) {
            return Text::where('slug', $slug)->firstOrFail();
        });

        $categories = Category::all();

        $checked = [];
        foreach ($text->categories as $link){
            $checked[] = $link->pivot->category_id;
        }

        $checked = array_flip($checked);

        $linkNames = [];
        foreach($text->categories as $link) {
            $linkNames[] = $link->name;
        }

        // show the edit form and pass the group
        return view('admin.texts.assign', [
            'title' => 'Assign the text to a category or categories',
            'text' => $text,
            'checked' => $checked,
            'categories' => $categories,
            'linkNames' => $linkNames,
        ]);
    }

    public function save_assigned_text()
    {
        $text = Text::find($_POST['text_id']);

        // only sync the pivot table data if there are any selected categories
        if (!empty($_POST['categories_selected'])) {
            $text->categories()->sync(array_keys($_POST['categories_selected']));
        } else {
            $text->categories()->detach();
        }

        return back()->with('success', 'Text assigned to selected category(ies)');
    }



}
