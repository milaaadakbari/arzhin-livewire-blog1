<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'parent_id',
    ];

    public function parentCategory()
    {
      return $this->belongsTo(category::class, 'parent_id','id')->withDefault('title');
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }


//    public function childCategory()
//    {
//        return $this->hasMany(category::class, 'parent_id','id');
//    }
}
