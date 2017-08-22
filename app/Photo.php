<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = ['imageable_id', 'imageable_type', 'filename'];

    public function imageable()
    {
        return $this->morphTo();
    }

}
