<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WordController extends Controller
{
    //
    public function index(Request $request)
    {
    	return view('admin/word/word')
    	->with('nav',$this->navSelect('word_release'));
    }
    public function config(Request $request)
    {
    	return view('admin/word/word')
    	->with('nav',$this->navSelect('word_release'));
    }
}
