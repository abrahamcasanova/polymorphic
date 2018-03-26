<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['title','url'];

    public function polymorphic()
    {
        return $this->morphMany('App\Polymorphic', 'polymorphicable');
    }

}
