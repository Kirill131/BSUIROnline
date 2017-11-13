<?php

namespace App\Http\Controllers;
use App\Maintexts;
class BaseController extends Controller
{/*
	public function getIndex(){
	echo 'Ok';
	}
    public function getOne($id=null) {
	return view ('test')->with('id',$id);
	}*/
	public function getIndex($id=null){
		$obj=Maintexts::where('url','index')->first();
		return view('test')->with('obj', $obj);
	}	
}