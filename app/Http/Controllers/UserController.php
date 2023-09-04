<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('list',[
            'title' => "All Authors",
            'page' => "authors",
            'address' => "username",
            'datas' => User::get()
        ]);
    }

    public function show(User $user){
        return view('articles',[
            'title' => "Article By: $user->name",
            'name' => $user->name,
            'articles' => $user->articles->load('category','user')
        ]);
    }
}
