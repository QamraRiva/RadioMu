<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('articles', [
            "title" => "All Articles",
            "articles" => Article::latest()->get()
        ]);
    }

    public function show(Article $article){
        return view('article', [
            "title" => "Single Post",
            "article" => $article
        ]);
    }
}
