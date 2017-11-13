<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function getIndex($id=null){
		return view ('static')->with('id',$id);
	}
}
