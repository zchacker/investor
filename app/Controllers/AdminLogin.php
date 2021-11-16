<?php

namespace App\Controllers;

use \App\Models\AdminModel;


class AdminLogin extends BaseController
{
	public function index()
	{
        $error = '';

        if($_POST){
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            //var_dump($password);
            //print($this->hash_password($password));

            $this->adminModel = new AdminModel();
            $user = $this->adminModel->where('username' , $username)->first();

            if($user == NULL){
                $error = 'اسم المستخدم غير موجود';
            }else{
                
                $auth = password_verify($password , $user['password']);
                                
                if($auth)
				{
                    // set as loggedin and redirct to adding project
                    session()->set('admin_loggedin' , TRUE);
                    session()->set('admin_id' , $user['id']);
                    return redirect()->to('Dash/index');

                }else{

                    $error = 'اسم المستخدم أو كلمة المرور خطأ';

                }            

            }

        }

        $data['error'] = $error;
        print view('dashboard/login' , $data);

    }

    private function hash_password($password)
	{
		return password_hash($password, PASSWORD_BCRYPT);
	}

}

?>