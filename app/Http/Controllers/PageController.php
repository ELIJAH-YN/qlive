<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $articleIndex_1 = Article::where('article_id', '=', '1')->orderBy('id', 'desc')->paginate(8);
        $articleIndex_2 = Article::where('article_id', '=', '4')->orderBy('id', 'desc')->paginate(8);
        $articleIndex_3 = Article::where('article_id', '=', '6')->orderBy('id', 'desc')->paginate(8);


        return view('qlive.index')->with(compact('articleIndex_1','articleIndex_2','articleIndex_3'));
    }

    public function innerpageIndex()
    {
    	return view('qlive.innerpage');
    }
     public function trendingIndex()
    {
    	return view('qlive.trending');
    }
      public function searchIndex()
    {
    	return view('qlive.search');
    }
      public function onlineformIndex()
    {
    	return view('qlive.onlineform');
    }
     public function checkIndex()
    {
    	return view('qlive.check');
    }
     public function modelcardIndex()
    {
    	return view('qlive.modelcard');
    }
}
