<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Tags\HasTags;

class Article extends Model
{
    use HasTags;

    protected $fillable = [ 'title', 'description', 'cover'];

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

    public function paragraphs()
    {
        return $this->hasMany('App\Paragraph');
    }
}
