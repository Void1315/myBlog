<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /*
    这是一个用来管理左侧导航栏选中的方法
    */
    private $nav =[
    	'index' => null,
    	'word' => [
    		'word'=>null,
    		'release' => null,
	    	'config' => null,
	    	'other' => null
    	],
    	'update'=>[
    		'update'=>null,
    		'image'=>null,
    		'video'=>null
    	],
    	'tage' => null,
    	'config' => null,
    	'about' => null
    ];
    public function getResult($nav,$offset)
    {
    	if(count($offset)>1)
		{	
			$nav[$offset[0]][$offset[0]] = 'in';
			$index = $offset[0];
			array_shift($offset);
			$nav[$index] = $this->getResult($nav[$index],$offset);
		}
		else
			$nav[$offset[0]] = 'active';//把头变成active
		return $nav;
    }
    public function navSelect($offset)
    {
    	if(strstr($offset, '_'))
    	{
    		$offset = explode("_",$offset);//分成数组
			$this->nav = $this->getResult($this->nav,$offset);
    	}
    	else
    	{
		    $this->nav[$offset] = 'active';
    	}
	    return $this->nav;
    }
    public function goodJson($str)
    {
        $str = is_array($str)?$str:['text'=>$str];
        $str = array_merge($str,['type'=>'success']);
        return json_encode($str);
    }
    public function badJson($str)
    {
        $str = is_array($str)?$str:['text'=>$str];
        $str = array_merge($str,['type'=>'error']);
        return json_encode($str);
    }}
