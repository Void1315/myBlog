<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class IndexController extends Controller
{
    //
    public function index(Request $request)
    {
    	$ArticleModel = new Article();
    	return view('blog/index')->with('articles',$ArticleModel->getArticleAll());
    }
}
