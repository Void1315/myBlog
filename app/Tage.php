<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tage extends Model
{
    //
    protected $dates = ['deleted_at'];

    public function getAll()
    {
    	return $this->all();
    }
    public function getArticle()
    {
    	return $this->belongsToMany('App\Article','article_tage', 'tage_id', 'article_id');
    }
    public function addTages($request)
    {
    	$this->tage_content = $request->tage_content;
    	$this->color = $request->color;
    	if($this->save())
    		return DB::table('tages')->select(DB::raw('max(id)'))->value('max(id)');
    	else
    		return false;
    }
    public function tag_delete($request)
    {
    	$this_tage = $this->find($request->id);
    	if(!$this_tage)
    		return '没有此标签id!';
    	if($this_tage->delete())
    		return true;
    	else
    		return '错误请重试!';
    }
    public function update_tages($request)
    {
        $obj = $this->find($request->id);
        $obj->tage_content = $request->tage_content;
        $obj->color = $request->color;
        if($obj->save())
            return true;
        else
            return false;
    }   
}
