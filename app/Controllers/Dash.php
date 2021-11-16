<?php

namespace App\Controllers;

use \App\Models\AdminModel;
use \App\Models\ProjectsModel;


class Dash extends BaseController
{
	public function index()
	{
		$data['tab'] = 1;
        print view('dashboard/header', $data);        
        print view('dashboard/index');        
        print view('dashboard/footer'); 
		
    }

	public function projects()
	{

	}

}

?>