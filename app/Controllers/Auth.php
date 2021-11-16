<?php

namespace App\Controllers;

class Auth extends BaseController
{
	public $authModel;

	public function __construct()
	{
		$this->authModel = new \App\Models\AuthModel();
	}

	public function index()
	{		
		// return view('welcome_message');

		// $data['title'] = 'مرحبا بك في منصة عرض المشاريع للمستثمرين Earno';
		// $data['description'] = '';

		// print view('header/header_view' , $data);
		// print view('public_pages/home');
		// print view('footer/footer_view');	

		return redirect()->to('auth/register');
	}

    public function register()
    {

		if($_POST){

			$user_data = array(
				'full_name' => $_POST['full_name'],
				'email' => $_POST['email'],
				'id_number' => $_POST['id_number'],
				'phone' => $_POST['phone'],
				'pass' => $this->hash_password($_POST['pass']),
			);
			

			if($this->authModel->add_new_user($user_data)){								
				$db = \Config\Database::connect();	
				session()->set('loggedin' , TRUE);			
				session()->set('user_id' ,$db->insertID());				
				return redirect()->to('user/index');
				die;
			}
			
		}

        $data['title'] = 'سجل الآن وانشر مشروعك';
		$data['description'] = '';

		print view('header/header_view' , $data);
		print view('user/register');
		print view('footer/footer_view');

    }

    public function login()
    {
        
		$error = '';

		if($_POST){

			$username = $_POST['username'];
			$pass 	  = $_POST['pass'];					

			$query = $this->authModel->get_user_data($username);
			
			if( $query  != NULL )
			{
				$auth = password_verify($pass , $query[0]->password);
				if($auth)
				{
					// set as loggedin and redirct to adding project
					session()->set('loggedin' , TRUE);
					session()->set('user_id' , $query[0]->id);
					return redirect()->to('user/add_project');
				}
				else
				{
					$error = 'اسم المستخدم او كلمة المرور خطأ';
				}
			}
			else
			{
				$error = 'اسم المستخدم أو كلمة المرور خطأً';
			}
			
			
		}

		//$auth  = password_verify($password , $hash_in_database); // this check the password

		$data['title'] = 'سجل الآن وانشر مشروعك';
		$data['description'] = '';
		$data['error'] = $error;		

		print view('header/header_view' , $data);
		print view('user/login');
		print view('footer/footer_view');
    }

	public function logout()
	{
		$array_items = ['user_id', 'user_id'];
        session()->remove($array_items);
        return redirect()->to('/');
	}

	private function hash_password($password)
	{
		return password_hash($password, PASSWORD_BCRYPT);
	}

}

?>