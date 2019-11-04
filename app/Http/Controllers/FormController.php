<?php

namespace App\Http\Controllers;

use App\Modelform;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function viewForm()
    {
        $form = Modelform::get();
        return view('admin.form.view_form')->with(compact('form'));
    }
}
