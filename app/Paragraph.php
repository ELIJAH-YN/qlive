<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    protected $fillable = ['article_id', 'content', 'cover'];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
