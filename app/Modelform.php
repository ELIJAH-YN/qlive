<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelform extends Model
{
    protected $fillable = ['real_name','nick_name','referrer','birth','contact_phone','line_id','height',
        'weight','measurements','shoes_size','contract','facebook_url','facebook_people','ig_url','ig_people',
        'address','image','stream_platform_now','stream_platform_past','job','interested_job','resume','status'];

    public function modelImage()
    {
        return $this->hasMany('App\ModelImage');
    }
}
