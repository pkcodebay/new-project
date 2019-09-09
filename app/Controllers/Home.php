<?php namespace App\Controllers;

use App\Models\NewsModel;

class Home extends BaseController
{
	public function index()
	{		
		$news = New NewsModel();
		$data['news'] = $news->getNews();
		return view('welcome_message',$data);
	}

	//--------------------------------------------------------------------

}
