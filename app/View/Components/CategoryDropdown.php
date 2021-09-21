<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryDropdown extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return View|\Closure|string
     */
    public function render()
    {

        return view('components.category-dropdown', [
            'categories' => Category::where('display', 1)->get(),
            'currentCategory' => Category::where('display', 1)->firstWhere('slug', request('category')),
        ]);
    }
}
