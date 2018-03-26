<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polymorphic extends Model
{
    protected $fillable = [
        'user_id',
        'polymorphicable_id',
        'polymorphicable_type',
        'message'
    ];

    public function polymorphicable()
    {
        return $this->morphTo();
    }
}
