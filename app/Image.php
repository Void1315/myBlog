<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
            $path = $request->image->store('image');
            return ['data'=>storage_path($path)];
		}
        else
            return false;
    }
}
