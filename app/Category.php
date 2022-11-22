<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title'
    ];
    public function posts()
{
    return $this->hasMany('App\Post');
}

public function twoPosts()
{
    return $this->hasMany('App\Post')->limit(2);
}


}
