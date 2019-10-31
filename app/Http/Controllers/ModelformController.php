<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelformController extends Controller
{
    public function index()
    {
        return view('qlive.modelcard.model_form');
    }
}
