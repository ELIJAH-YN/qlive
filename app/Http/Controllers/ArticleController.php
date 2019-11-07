<?php

namespace App\Http\Controllers;

use App\Category;
use App\Paragraph;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Input;
use App\Article;
use Image;
use Session;
use Auth;

class ArticleController extends Controller
{
    public function addArticle(Request $request, $id = null)
    {

        // validation
        if ($request->isMethod('post')) {
            $data = $request->all();
//            echo "<pre>"; print_r($data); die();
//            dd($data);
            if (empty($data['article_id'])) {
                return redirect()->back()->with('flash_message_error','Under Category is missing!');
            }
            $article = new Article();
            $article->article_id = $data['article_id'];
            $article->title = $data['title'];
            $article->description = Arr::get($data, 'description', '');
            $article->save();

            // article_id is existed

//            $article = Article::findOrFail($data['article_id'])
//                ->update([
//                    'title' => request()->post('title'),
//                    'description' request()->post('description', ''),
//                ]);

            foreach ($data['content'] as $key => $value) {
                if (!empty($value)) {
                    $paragraph = new Paragraph();
                    $paragraph->content = $value;
//                    dd($paragraph);
                }

                foreach ($data['image'] as $image) {
                    if ($request->hasFile('image')) {
//                        dd($images);
//                        if ($image->isValid()) {
                        $extension = $image->getClientOriginalExtension();
                        $filename = rand(111, 99999) . '.' . $extension;
                        $large_image_path = 'assets/images/cover/large/' . $filename;
                        $medium_image_path = 'assets/images/cover/medium/' . $filename;
                        $small_image_path = 'assets/images/cover/small/' . $filename;
                        // Resize Image code
                        Image::make($image)->save($large_image_path);
                        Image::make($image)->resize(600, 600)->save($medium_image_path);
                        Image::make($image)->resize(283, 160)->save($small_image_path);

                        $paragraph->image = $filename;
//                        }
                    }
//                    dd($data);
                }
                $paragraph->save();
                $article->paragraphs()->save($paragraph);
            }


            // Upload Image
            if ($request->hasFile('cover')) {
                $cover_tmp = $request->file('cover');
                if ($cover_tmp->isValid()) {
                    $extension = $cover_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'assets/images/cover/large/' . $filename;
                    $medium_image_path = 'assets/images/cover/medium/' . $filename;
                    $small_image_path = 'assets/images/cover/small/' . $filename;
                    // Resize Image code
                    Image::make($cover_tmp)->save($large_image_path);
                    Image::make($cover_tmp)->resize(600, 600)->save($medium_image_path);
                    Image::make($cover_tmp)->resize(283, 160)->save($small_image_path);

                    //Store image name in cover table
                    $article->cover = $filename;
                    $article->save();
                }
            }
            return redirect('/admin/view-articles')->with('flash_message_success', 'Article has added successfully!');
        }


        // Category drop down start
        $categories = Category::where(['parent_id' => 0])->get();
        $categories_dropdown = "<option selected disabled>Select</option>";
        foreach ($categories as $cat) {
            $categories_dropdown .= "<option value='" . $cat->id . "'>" . $cat->name . "</option>";
            $sub_categories = Category::where(['parent_id' => $cat->id])->get();
            foreach ($sub_categories as $sub_cat) {
                $categories_dropdown .= "<option value='" . $sub_cat->id . "'>&nbsp;--&nbsp;" . $sub_cat->name . "</option>";
            }
        }
        // Category drop down end

        return view('admin.articles.add_article')->with(compact('categories_dropdown'));
    }

    public function editArticle(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
//            echo "<pre>"; print_r($data); die();

            // Upload Image
            if ($request->hasFile('cover')) {
                $cover_tmp = $request->file('cover');
                if ($cover_tmp->isValid()) {
                    $extension = $cover_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'assets/images/cover/large/' . $filename;
                    $medium_image_path = 'assets/images/cover/medium/' . $filename;
                    $small_image_path = 'assets/images/cover/small/' . $filename;
                    // Resize Image code
                    Image::make($cover_tmp)->save($large_image_path);
                    Image::make($cover_tmp)->resize(600, 600)->save($medium_image_path);
                    Image::make($cover_tmp)->resize(283, 160)->save($small_image_path);
                }
            } else {
                $filename = $data['current_cover'];
            }

            if (empty($data['description'])) {
                $data['description'];
            }

            Article::where(['id' => $id])->update(['article_id' => $data['article_id'], 'title' => $data['title'], 'description' => $data['description'], 'cover' => $filename]);
            return redirect()->back()->with('flash_message_success', '文章修改成功');
        }

        // Get Article Details
        $articleDetails = Article::where(['id' => $id])->first();

        // Category drop down start
        $categories = Category::where(['parent_id' => 0])->get();
        $categories_dropdown = "<option selected disabled>Select</option>";
        foreach ($categories as $cat) {
            if ($cat->id == $articleDetails->article_id) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $categories_dropdown .= "<option value='" . $cat->id . "' " . $selected . ">" . $cat->name . "</option>";
            $sub_categories = Category::where(['parent_id' => $cat->id])->get();
            foreach ($sub_categories as $sub_cat) {
                if ($sub_cat->id == $articleDetails->article_id) {
                    $selected = "selected";
                } else {
                    $selected = "";
                }
                $categories_dropdown .= "<option value='" . $sub_cat->id . "' " . $selected . ">&nbsp;--&nbsp;" . $sub_cat->name . "</option>";
            }
        }
        // Category drop down end

        return view('admin.articles.edit_article')->with(compact('articleDetails', 'categories_dropdown'));
    }

    public function viewArticles()
    {
        $articles = Article::get();
        $articles = json_decode(json_encode($articles));
        foreach ($articles as $key => $val) {
            $articles_name = Category::where(['id' => $val->article_id])->first();
            $articles[$key]->article_name = $articles_name->name;
//            echo "<pre>"; print_r($articles); die();
        }
//        echo "<pre>"; print_r($articles); die();
        return view('admin.articles.view_articles')->with(compact('articles'));
    }

    public function deleteArticle($id = null)
    {
        $article = Article::query()->where(['id' => $id]);
        $article->delete();

        return redirect()->back()->with('flash_message_success', '成功刪除文章');
    }

    public function deleteArticleCover($id = null)
    {
        Article::where(['id' => $id])->update(['cover' => '']);
        return redirect()->back()->with('flash_message_success', '文章封面已刪除!');
    }
}
