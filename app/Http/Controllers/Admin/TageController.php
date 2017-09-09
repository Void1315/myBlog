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
    	return view('admin/tages/tages')->with('nav',$this->navSelect('tage'))->with('tageDate',$TageModel->getAll());
    }
}
