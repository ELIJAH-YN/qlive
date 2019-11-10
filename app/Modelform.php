<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Modelform extends Model
{
    protected $fillable = ['real_name','nick_name','referrer','birth','contact_phone','line_id','height',
        'weight','measurements','shoes_size','contract','facebook_url','facebook_people','ig_url','ig_people',
        'address','image','stream_platform_now','stream_platform_past','job','interested_job','resume','status'];

    public static function boot()
    {
        parent::boot();

        static::creating( function ( $callback )
        {
            $slug = Str::random( 6 );
            while ( count( static::where( 'slug', $slug )->limit( 1 )->get() ) > 0 )
            {
                $slug = Str::random( 6 );
            }
            $callback->slug = $slug;
        } );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function modelImage()
    {
        return $this->hasMany('App\ModelImage');
    }
}
