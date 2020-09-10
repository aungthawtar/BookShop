<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = ['title','content','image','category_id','author_id'];

    public function category(){
        return $this->belongsTo('App\category','category_id');
    }
    public function author(){
        return $this->belongsTo('App\author', 'author_id');
    }
}

