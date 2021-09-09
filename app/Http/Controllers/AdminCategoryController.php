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

    /* TODO sort page works
    public function sort_page_works(Category $category)
    {
        if (Auth::check()) {
            $group = Group::with('Works')->where('id', '=', $id)->first();

            // Couldn't figure out how to use Eloquent to get the works ordered by the pivot table order field
            $works = DB::table('works')
                ->join('group_work', 'works.id', '=', 'group_work.work_id')
                ->join('groups', 'groups.id', '=', 'group_work.group_id')
                ->select('group_work.order', 'works.id', 'works.title', 'works.media', 'works.dimensions', 'works.reference', 'works.work_date', 'works.description', 'works.notes')
                ->where('groups.id', '=', $group->id)
                ->orderBy('group_work.order')
                ->get();

            if (sizeof($works) < 1) {
                Session::flash('message', 'There are currently no works on the '.$group->name.' page');
                return Redirect::to('pages');
            }
            if (sizeof($works) == 1) {
                Session::flash('message', 'There is currently only one work on the '.$group->name.' page');
                return Redirect::to('pages');
            }

            return View::make('works.sort')
                ->with('group', $group)
                ->with('works', $works)
                ->with('entity', 'page works')
                ->with('title', 'Sort page works');

        } else {

            Session::flash('message', 'Please log in');

            return Redirect::to('/');
        }
    }
    */

    /* TODO save page works order
    public function save_page_works_order()
    {

        if (Request::ajax()){

            $uuid = Input::get('uuid');
            $id = Input::get('id');
            $group_id = Input::get('group_id');

            $i = 1;

            foreach($id as $value) {
                $groupwork = GroupWork::where('work_id', $value)->where('group_id', $group_id)->first();

                $groupwork->order = $i;
                $groupwork->save();

                $i++;
            }
        }

        return Redirect::to('/');
    }
    */

    /* TODO sort page texts */
    public function sort_page_texts(Category $category)
    {
//        $category = Category::where('id', '=', $id)->first();
        $slug = $category->slug;
        $category = cache()->remember("categories.{$slug}", 30, function() use ($slug) {
            return Category::where('slug', $slug)->firstOrFail();
        });

        // paginate
        $categories = Category::orderBy('id', 'asc')->paginate(50);
        $texts = $category->texts;
//        ddd($category->name, $texts);

        if (sizeof($texts) < 1) {
//            Session::flash('message', 'There are currently no texts on the '.$category->name.' page');
//            return Redirect::to('pages');
        }
        if (sizeof($texts) == 1) {
//            Session::flash('message', 'There is currently only one text on the '.$category->name.' page');
//            return Redirect::to('pages');
        }

        return view('admin.texts.sort', [
            'category' => $category,
            'texts' => $texts,
            'entity' => 'page texts',
            'title' => 'Sort page texts',
        ]);

    }
    /* */

    /* TODO save page texts order
    public function save_page_texts_order()
    {

        if (Request::ajax()){

            $uuid = Input::get('uuid');
            $id = Input::get('id');

            $i = 1;

            foreach($id as $val) {

                $grouptext = GroupText::where('text_id', $val)->first();

                $grouptext->order = $i;
                $grouptext->save();

                $i++;

            }

        }

        return Redirect::to('/');
    }
    */

}
