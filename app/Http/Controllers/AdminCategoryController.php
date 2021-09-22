<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryWork;
use App\Models\CategoryText;
use App\Models\Text;
use App\Models\Work;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminCategoryController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::paginate(50),
            'title' => 'Categories index',
            'index' => '/admin/categories',
            'create' => '/admin/categories/create',
        ]);
    }

    /**
     * @param Category $category
     * @return Factory|View
     * @throws \Exception
     */
    public function show(Category $category)
    {
        $slug = $category->slug;
        $category = cache()->remember("categories.{$slug}", 30, function() use ($slug) {
            return Category::where('slug', $slug)->firstOrFail();
        });

        return view('admin.categories.show', [
            'category' => $category,
            'title' => 'A category',
        ]);
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * @return RedirectResponse|Redirector
     */
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'slug' => ['required', Rule::unique('categories', 'slug')],
        ]);

        $attributes['nav_menu_item'] = (null === request()->get('nav_menu_item')) ? 0 : 1;
        $attributes['display'] = (null === request()->get('display')) ? 0 : 1;

        Category::create($attributes);

        return redirect('/');
    }

    /**
     * @param Category $category
     * @return Factory|View
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    /**
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(Category $category)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'slug' => ['required', Rule::unique('categories', 'slug')->ignore($category->id)],
        ]);

        $attributes['nav_menu_item'] = (null === request()->get('nav_menu_item')) ? 0 : 1;
        $attributes['display'] = (null === request()->get('display')) ? 0 : 1;

        $category->update($attributes);

        return back()->with('success', 'Category updated');
    }

    /**
     * @param Category $category
     * @return RedirectResponse
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return back()->with('success', 'Category deleted');
    }

    /**
     * @param Work $work
     * @return Factory|View
     * @throws \Exception
     */
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
            'checked' => $checked,
            'categories' => $categories,
            'linkNames' => $linkNames,
        ]);
    }

    /**
     * @return RedirectResponse
     */
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

    /**
     * @param Text $text
     * @return Factory|View
     * @throws \Exception
     */
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

    /**
     * @return RedirectResponse
     */
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

    /**
     * @param Category $category
     * @return Factory|View|RedirectResponse
     * @throws \Exception
     */
    public function sort_page_works(Category $category)
    {
        $slug = $category->slug;

        $category = cache()->remember("categories.{$slug}", 5, function() use ($slug) {
            return Category::where('slug', $slug)->firstOrFail();
        });

        $works = $category->works->sortBy('pivot.order', SORT_DESC);

            if (sizeof($works) < 1) {
                return back()->with('success', 'No works in '.$category->name.' yet');
            }
            if (sizeof($works) == 1) {
                return back()->with('success', 'Only one work on '.$category->name . ' page');
            }

        $uuid = Str::uuid()->toString();

        return view('admin.works.sort', [
            'works' => $works,
            'category' => $category,
            'uuid' => $uuid,
            'path' => '/admin/category/save_page_works_order',
        ]);
    }

    /**
     * Save page works order
     */
    public function save_page_works_order()
    {
        if (request()->ajax()) {
            $uuid = request()->get('uuid');
            $work_ids = request()->get('data_ids');
            $category_id = request()->get('category_id');

            $i = 0;
            foreach ($work_ids as $work_id) {
                $categoryWork = CategoryWork::where('work_id', $work_id)
                    ->where('category_id', $category_id)
                    ->first();

                $categoryWork->order = $i;
                $categoryWork->update();

                $i++;
            }
        }
    }

    /**
     * @param Category $category
     * @return Factory|View|RedirectResponse
     * @throws \Exception
     */
    public function sort_page_texts(Category $category)
    {
        $slug = $category->slug;
        $category = cache()->remember("categories.{$slug}", 5, function() use ($slug) {
            return Category::where('slug', $slug)->firstOrFail();
        });

        $texts = $category->texts->sortBy('pivot.order', SORT_DESC);

        if (sizeof($texts) < 1) {
            return back()->with('success', 'No texts yet');
        }
        if (sizeof($texts) == 1) {
            return back()->with('success', 'Only one text on '.$category->name . ' page');
        }

        $uuid = Str::uuid()->toString();

        return view('admin.texts.sort', [
            'category' => $category,
            'texts' => $texts,
            'entity' => 'page texts',
            'title' => 'Sort page texts',
            'uuid' => $uuid,
            'path' => '/admin/category/save_page_texts_order',
        ]);

    }

    /**
     * Save page texts order
     */
    public function save_page_texts_order()
    {
        if (request()->ajax()){
            $uuid = request()->get('uuid');
            $text_ids = request()->get('data_ids');
            $category_id = request()->get('category_id');

            $i = 0;
            foreach($text_ids as $text_id) {
                $categoryText = CategoryText::where('text_id', $text_id)
                    ->where('category_id', $category_id)
                    ->first();

                $categoryText->order = $i;
                $categoryText->update();

                $i++;
            }
        }
    }

}
