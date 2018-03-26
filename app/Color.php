<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['title','body'];

    public function polymorphic()
    {
        return $this->morphMany('App\Polymorphic', 'polymorphicable');
    }

}
