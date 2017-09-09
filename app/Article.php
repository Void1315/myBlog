<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public function getArticleAll()
    {
    	return $this->all()->transform(function($item)
		{
			return $this->addTage($item);
		});
    }
    public function getTage()
    {
    	return $this->belongsToMany('App\Tage','article_tage', 'article_id', 'tage_id');
    }
    public function addTage($item)
    {
		$tages = $item->getTage;
		foreach ($tages as $tage) 
		{
			$item->tage_content = $tage->tage_content;
			$item->color = $tage->color;
		}
		return $item;
    }
}
