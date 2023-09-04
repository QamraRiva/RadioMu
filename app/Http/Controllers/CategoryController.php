<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('list', [
            "title" => "All Categories",
            "page" => 'categories',
            "address" => 'slug',
            "datas" => Category::get()
        ]);
    }
    public function show(Category $category)
    {
        return view('articles', [
            "title" => "Article By Category: $category->name",
            "articles" => $category->articles->load('category','user')
        ]);
    }
}
