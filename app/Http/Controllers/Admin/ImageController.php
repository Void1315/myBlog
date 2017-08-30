<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image;

class ImageController extends Controller
{
    //
    public function index(Request $request)
    {
    	if($request->method()=='POST')
    	{
    		$ImageModel = new Image();
            $path_arr = $ImageModel->upload($request);
    		if($path_arr)
                return $this->goodJson(array_merge(['errno'=>'0'],$path_arr));
    	}
    	return view('admin/update/image');
    }
}
