<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    const IMAGES = [
        0 => 'IMG_0216.PNG', 1 => 'IMG_0217.PNG', 2 => 'IMG_0222.PNG', 3 => 'IMG_0223.PNG', 4 => 'IMG_0548.PNG', 5 => 'IMG_0549.PNG', 6 => 'IMG_0552.PNG', 7 => 'IMG_0553.PNG', 8 => 'IMG_0554.PNG',
        9 => 'IMG_0591.PNG', 10 => 'IMG_0592.PNG', 11 => 'IMG_0593.PNG', 12 => 'IMG_0594.PNG', 13 => 'IMG_0595.PNG', 14 => 'IMG_0601.PNG', 15 => 'IMG_0602.PNG', 16 => 'IMG_0603.PNG', 17 => 'IMG_0604.PNG',
        18 => 'IMG_0605.PNG', 19 => 'IMG_0607.JPG', 20 => 'IMG_0609.PNG', 21 => 'IMG_0613.PNG', 22 => 'IMG_0626.PNG', 23 => 'IMG_0639.PNG', 24 => 'IMG_0646.PNG', 25 => 'IMG_0812.PNG', 26 => 'IMG_0813.PNG',
        27 => 'IMG_0838.PNG', 28 => 'IMG_0855.PNG', 29 => 'IMG_0856.PNG', 30 => 'IMG_0886.PNG', 31 => 'IMG_0902.PNG', 32 => 'IMG_0903.PNG', 33 => 'IMG_0939.PNG', 34 => 'IMG_0940.PNG', 35 => 'IMG_0941.PNG',
        36 => 'IMG_0979.PNG', 37 => 'IMG_1004.JPG', 38 => 'IMG_1005.JPG', 39 => 'IMG_1006.JPG', 40 => 'IMG_3790.JPG', 41 => 'IMG_3847.JPG', 42 => 'IMG_3848.JPG', 43 => 'IMG_3849.JPG', 44 => 'IMG_5201.JPG',
        45 => 'IMG_5202.JPG', 46 => 'IMG_6835.JPG', 47 => 'IMG_7222.JPG', 48 => 'IMG_7223.JPG', 49 => 'IMG_7465.JPG', 50 => 'IMG_7466.JPG', 51 => 'IMG_7467.JPG', 52 => 'IMG_7471.JPG', 53 => 'IMG_7588.JPG',
        54 => 'IMG_7589.JPG', 55 => 'IMG_7595.JPG', 56 => 'IMG_7604.JPG', 57 => 'IMG_7836.PNG', 58 => 'IMG_7880.PNG', 59 => 'IMG_7882.PNG', 60 => 'IMG_8019.PNG', 61 => 'IMG_8248.PNG', 62 => 'IMG_8364.PNG',
        63 => 'IMG_8379.PNG', 64 => 'IMG_8449.PNG', 65 => 'IMG_8465.PNG', 66 => 'IMG_8495.JPEG', 67 => 'IMG_8496.JPEG', 68 => 'IMG_8498.JPEG', 69 => 'IMG_8636.PNG', 70 => 'IMG_8926.PNG'
    ];

    //
    public function index()
    {
        return view('categories', [
            'categories' => Category::all(),
            'title' => 'Categories',
            'images' => self::IMAGES,
        ]);
    }

    public function show(Category $category)
    {
        $slug = $category->slug;
        $category = cache()->remember("category.{$slug}", 30, function() use ($slug) {
            return Category::where('slug', $slug)->firstOrFail();
        });

        return view('category', [
//            'posts' => $category->posts,
            'works' => $category->works,
            'texts' => $category->texts,
            'currentCategory' => $category,
            'images' => self::IMAGES,
            'category' => $category,
            'categories' => Category::all(),
        ]);
    }
}
