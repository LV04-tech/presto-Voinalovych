<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Request;


class ArticleController extends Controller implements HasMiddleware
{
 
  
    public static function middleware(): array{
        return[
            new Middleware('auth', only: ['create']),
        ];
    }
    public function create()
    {
        return view('article.create');
    }
    public function store(Request $request)
    {
       
    $this->article = Article::create([
        'title' => $this->title,
        'description' => $this->description,
        'price' => $this->price,
    ]);
          return view('submit.article');
       
         session()->flash('success','Articolo creato correttamente');
         $this->reset();
    }
     
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        return view('article.index', compact('articles'));
    }
    
    public function show(Article $article)
    {
       return view('article.show', compact('article'));
    
    }

    public function byCategory(Category $category)
    {
        return view('article.byCategory', ['articles' => $category->articles, 'category' => $category]);
    }
}

