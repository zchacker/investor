<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{		
		// return view('welcome_message');

		$projectsModel = new \App\Models\ProjectsModel();
        $projects      = $projectsModel->findAll();

		$data['title'] = 'مرحبا بك في منصة عرض المشاريع للمستثمرين Earno';
		$data['description'] = '';

		$data['projects'] = $projects;
		print view('header/header_view' , $data);
		print view('public_pages/home');
		print view('footer/footer_view');
	
	}

	public function project($id)
	{

		$projectsModel 		 = new \App\Models\ProjectsModel();
        $projects      		 = $projectsModel->where('id', $id )->findAll(1);

		if(count($projects) > 0){
			$data['title'] 		 = $projects[0]['title'];
			$data['description'] = '';
	
			$data['project'] = $projects[0];
			print view('header/header_view' , $data);
			print view('public_pages/project');
			print view('footer/footer_view');
		}else{
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}		

	}

	public function investnow($id)
	{

		$message = '';
		$error = '';

		if($_POST)
        {
            $order_data = array(
                'project_id' => $id,
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'email' => $_POST['email'],
                'best_time' => $_POST['best_time'],         
            );

			$ordersModel = new \App\Models\OrdersModel();
        	$orders = $ordersModel->insert($order_data);

            if($orders)
            {
                $message = 'تم ارسال طلبك بنجاح, وهو قيد المراجعة سيتم التواصل بك قريباً';
            }
            else
            {
                $error = 'حدث خطأ ما لم يتم ارسال الطلب بنجاح, حاول مرة أخرى';
            }
        }

		$data['title'] 		 = 'استثمر في المشروع الان';
		$data['description'] = '';
		$data['message'] = $message;
		$data['error'] = $error;
		
		print view('header/header_view' , $data);
		print view('public_pages/invest');
		print view('footer/footer_view');
	}

}
