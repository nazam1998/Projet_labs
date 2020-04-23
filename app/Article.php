<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function categorie()
    {
        return $this->belongsTo('App\Categorie');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'article_tag', 'article_id', 'tag_id');
    }








    
    public function comments()
    {

        return $this->belongsToMany('App\User', 'comments', 'article_id', 'user_id');
    }
}
