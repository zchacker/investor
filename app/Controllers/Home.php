<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{		
		// return view('welcome_message');

		$data['title'] = 'مرحبا بك في منصة عرض المشاريع للمستثمرين Earno';
		$data['description'] = '';

		print view('header/header_view' , $data);
		print view('public_pages/home');
		print view('footer/footer_view');
	
	}
}
