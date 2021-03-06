<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
     public function images(){
        return $this->hasMany('App\Image');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
