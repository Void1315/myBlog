<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tage extends Model
{
    //
    public function getAll()
    {
    	return $this->all();
    }
    public function getArticle()
    {
    	return $this->belongsToMany('App\Article','article_tage', 'tage_id', 'article_id');
    }
}
