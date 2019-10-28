<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function addArticle(Request $request)
    {
        return view('admin.articles.add_article');
    }
}
