<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelImage extends Model
{
    protected $fillable = ['model_id','image'];

    public function modelform()
    {
        return $this->belongsTo('App\Modelform');
    }
}
