<?php

namespace App\Http\Controllers;

use App\Modelform;
use App\ModelImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use Session;
use Auth;

class ModelformController extends Controller
{
    public function index()
    {
        return view('qlive.modelcard.model_form');
    }

    public function addModel(Request $request)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            $model = new Modelform();
            $model->real_name = $data['real_name'];
            $model->nick_name = $data['nick_name'];
            $model->referrer = $data['referrer'];
            $model->birth = $data['birth'];
            $model->contact_phone = $data['contact_phone'];
            $model->line_id = $data['line_id'];
            $model->height = $data['height'];
            $model->weight = $data['weight'];
            $model->measurements = $data['measurements'];
            $model->shoes_size = $data['shoes_size'];
            $model->contract = $data['contract'];
            $model->facebook_url = $data['facebook_url'];
            $model->facebook_people = $data['facebook_people'];
            $model->ig_url = $data['ig_url'];
            $model->ig_people = $data['ig_people'];
            $model->address = $data['address'];
            $model->stream_platform_now = $data['stream_platform_now'];
            $model->stream_platform_past = $data['stream_platform_past'];
            $model->job = $data['job'];
            $model->interested_job = implode($data['interested_job'], ',');
            if (!empty($data['resume'])) {
                $model->resume = $data['resume'];
            }else {
                $model->resume = '';
            }
            $model->save();

            $modelImg = new ModelImage();

            foreach ($data['images'] as $image) {
                if ($request->hasFile('images')) {
                    $extension = $image->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $large_image_path = 'assets/images/modelmg/large/' . $filename;
                    $medium_image_path = 'assets/images/modelmg/medium/' . $filename;
                    $small_image_path = 'assets/images/modelmg/small/' . $filename;
                    // Resize Image code
                    Image::make($image)->save($large_image_path);
                    Image::make($image)->resize(600, 600)->save($medium_image_path);
                    Image::make($image)->resize(283, 160)->save($small_image_path);

                    $modelImg->images = $filename;
                }
            }
            $modelImg->save();
            $model->modelImage()->save($modelImg);
            // dd($modelImg);
        }
        return redirect('/qlive/model-search');
    }

    public function profile($slug)
    {
        $profile = Modelform::where('slug', $slug)->first();
        return view('qlive.modelcard.model_profile')->with(compact('profile'));
    }

    public function show($id = null)
    {
        // $show = Modelform::where('id', $id)->orderBy('id','desc')->paginate(6);
        $show = Modelform::get();
        // dd($show);
        return view('qlive.modelcard.model_show')->with(compact('show'));
    }
}
