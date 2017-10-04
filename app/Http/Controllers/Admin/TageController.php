<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tage;
class TageController extends Controller
{
    //
    public function index(Request $request)
    {
    	$TageModel = new Tage();
    	if($request->ajax())
    	{
    		$this->validate($request,[
    		'tage_content' => 'required|string|max:10',
    		'color'=> 'required|string|max:10'
    		]);
    		$id = $TageModel->addTages($request);
    		if($id)
    			return $this->goodJson(['test'=>'成功创建!','id'=>$id]);
    		else
				return $this->badJson('失败！请重试！');    			
    	}
    	return view('admin/tages/tages')->with('nav',$this->navSelect('tage'))->with('tageDate',$TageModel->getAll());
    }
    public function tages_delete(Request $request)//标签的删除
    {
    	$this->validate($request, [
        'id' => 'required|integer'
    	]);
    	$TageModel = new Tage();
    	$result = $TageModel->tag_delete($request);
    	if(is_bool($result))
    		return $this->goodJson('删除成功!');
    	else
    		return $this->badJson($result);
    }
    public function update_tages(Request $request)//标签的更新
    {
    	$this->validate($request,[
    		'id'=>'required|integer',
    		'tage_content' => 'required|string|max:10',
    		'color'=> 'required|string|max:10'
    		]);
    	$TageModel = new Tage();
    	if($TageModel->update_tages($request))
    		return $this->goodJson('修改成功!');
    	else
    		return $this->badJson('修改失败!请稍后重试!');
    } 
}
