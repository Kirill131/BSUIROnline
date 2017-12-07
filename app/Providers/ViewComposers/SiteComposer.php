<?php
namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;

class SiteComposer
{
	public function compose(View $view)
    {
		$ur=url()->full();
		$arr=explode('/', $ur);
		if(isset($arr[3])){
			$end= $arr[3];
		}else{
			$end= 'index';
		}
		$view->with('end', $end);
	}
	}