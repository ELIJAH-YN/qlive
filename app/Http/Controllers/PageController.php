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
        $articleIndex_1 = Article::where('article_id', '1')->first();
//        dd($articleIndex_1);
        return view('qlive.innerpage')->with(compact('articleIndex_1'));
    }

    public function trendingIndex()
    {
        $articleIndex_1 = Article::where('article_id', '=', '1')->orderBy('id', 'desc')->paginate(8);
//        dd($articleIndex_1);

        return view('qlive.trending')->with(compact('articleIndex_1'));
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
