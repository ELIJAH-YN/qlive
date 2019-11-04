<?php

namespace App\Http\Controllers;

use App\Modelform;
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
            $model = json_decode(json_encode($filename));
            echo "<pre>"; print_r($filename); die();
        }
    }
}
