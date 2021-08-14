<?php

namespace App\Controllers;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }

	public function index()
	{		
		// return view('welcome_message');

		$data['title'] = 'مرحبا بك في منصة عرض المشاريع للمستثمرين Earno';
		$data['description'] = '';

		print view('header/header_view' , $data);
		print view('public_pages/home');
		print view('footer/footer_view');
	
	}    

    public function projects()
    {

    }

    public function add_project()
    {

        $message = '';
        $error = '';

        if($_POST)
        {
            $project_data = array(
                'title' => $_POST['title'],
                'domain' => $_POST['domain'],
                'capital' => $_POST['capital'],
                'share' => $_POST['share'],
                'description' => $_POST['description'],
                'call_time' => $_POST['call_time'],                
            );

            if($this->userModel->add_new_project($project_data))
            {
                $message = 'تم إرسال مشروعك بنجاح, وحاليا قيد المراجعة والموافقة';
            }
            else
            {
                $error = 'حدث خطأ ما لم يتم ارسال المشروع بنجاح, حاول مرة أخرى';
            }
        }

        $data['title']          = 'إضافة مشروع';
		$data['description']    = '';
		$data['message']        = $message;
		$data['error']          = $error;

		print view('header/header_view' , $data);
		print view('user/add_project');
		print view('footer/footer_view');
    }

    public function delete_project()
    {

    }
    
    public function profile()
    {
        
    }

}
?>