<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    //
    protected $fillable = ['name'];

    protected function addImage($path)
    {
    	$this->path = $path;
    	$this->save();
    }
    public function upload($request)//上传逻辑
    {
    	if ($request->file('image')) 
    	{
            $path = 'app/'.$request->image->store('image');
            return ['data'=>[url(Storage::url($path))]];
		}
        else
            return false;
    }
}
