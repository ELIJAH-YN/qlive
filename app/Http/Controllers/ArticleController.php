<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Article;
use Image;
use Session;
use Auth;

class ArticleController extends Controller
{
    public function addArticle(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
//            echo "<pre>"; print_r($data); die();
            if (empty($data['article_id'])) {
                return redirect()->back()->with('flash_message_error','Under Category is missing!');
            }
            $article = new Article();
            $article->article_id = $data['article_id'];
            $article->title = $data['title'];
            if (!empty($data['description'])) {
                $article->description = $data['description'];
            }else {
                $article->description = '';
            }
//            $article->cover = $data['cover'];

            // Upload Image
            if ($request->hasFile('cover')) {
                $cover_tmp = $request->file('cover');
                if ($cover_tmp->isValid()) {
                    $extension = $cover_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999). '.' .$extension;
                    $large_image_path = 'assets/images/cover/large/'.$filename;
                    $medium_image_path = 'assets/images/cover/medium/'.$filename;
                    $small_image_path = 'assets/images/cover/small/'.$filename;
                    // Resize Image code
                    Image::make($cover_tmp)->save($large_image_path);
                    Image::make($cover_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($cover_tmp)->resize(300,300)->save($small_image_path);

                    //Store image name in cover table
                    $article->cover = $filename;
                }
            }

            $article->save();
            return redirect()->back()->with('flash_message_success','Article has added successfully!');
        }

        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option selected disabled>Select</option>";
        foreach ($categories as $cat)
        {
            $categories_dropdown .="<option value='".$cat->id."'>".$cat->name."</option>";
            $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
            foreach ($sub_categories as $sub_cat) {
                $categories_dropdown .= "<option value='".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }

        return view('admin.articles.add_article')->with(compact('categories_dropdown'));
    }

    public function viewArticles()
    {
        $articles = Article::get();
        $articles = json_decode(json_encode($articles));
        foreach ($articles as $key => $val) {
            $category_name = Category::where(['id'=>$val->article_id])->first();
            $articles[$key]->catrgory_name = $category_name->name;
            echo "<pre>"; print_r($articles); die();
        }
//        echo "<pre>"; print_r($articles); die();
        return view('admin.articles.view_articles')->with(compact('articles'));
    }
}
