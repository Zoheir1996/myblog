<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home(){
        return view('home');
    }


public function index() {

    return view ('articles',[
        'articles' => Article::paginate(4),
        'categories'=> Category::all()
    ]);
}


public function show(Article $article)
{
    return view('article',[
        'article' =>$article
    ]);
    }
}