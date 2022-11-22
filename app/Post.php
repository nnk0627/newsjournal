<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['category_id','user_id','title','content',
        'date','images','slideimages','slideshow','status'];

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

   

}
