<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

    public function date()
    {
        return $this->created_at->format('d');
    }
    public function month()
    {

        return Str::limit(date('F', strtotime($this->created_at)), 3, $end = '');
    }
    public function year()
    {
        return $this->created_at->format('Y');
    }









    public function comments()
    {

        return $this->belongsToMany('App\User', 'comments', 'article_id', 'user_id');
    }
}
