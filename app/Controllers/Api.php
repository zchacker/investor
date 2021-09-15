<?php 

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;


use App\Models\OrdersModel;
use App\Models\ProjectsModel;
use App\Models\UserModel;

// this class is protected when call api
// more in this link
// https://www.twilio.com/blog/create-secured-restful-api-codeigniter-php

class Api extends ResourceController
{
    use ResponseTrait;

    // all projects
    public function index()
    {
        $model = new ProjectsModel();
        $data['projects'] = $model->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }

    // all projects
    public function my_projects()
    {
        $model = new ProjectsModel();
        $user_id = $_POST['user_id'];
        $data['projects'] = $model->where(['user_id' => $user_id])->orderBy('id', 'DESC')->findAll();
        return $this->respond($data);
    }

    // user able to add project
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
                'user_id' => intval($_POST['user_id'])
            );            

            $model = new ProjectsModel();

            if( $model->insert($project_data) )
            {
                $message = 'تم إرسال مشروعك بنجاح, وحاليا قيد المراجعة والموافقة';
                return $this
                ->respondCreated(
                    [
                        'message' => $message,                
                        'status'   => 200,
                        'error'    => '',
                    ]
                );
            }
            else
            {
                $error = 'حدث خطأ ما لم يتم ارسال المشروع بنجاح, حاول مرة أخرى';
                return $this
                ->respondCreated(
                    [
                        'message' => '',                
                        'status'  => 500,
                        'error'   => $error,
                    ]
                );
            }
        }
        
    }

    // user able to delete project
    public function delete_project()
    {
        
        $model      = new ProjectsModel();
        $user_id    = $_POST['user_id'];
        $project_id = $_POST['project_id'];

        $deleted = $model->where(['user_id' => $user_id , 'id' => $project_id])->delete();        

        if($deleted){
            return $this
            ->respondCreated(
                [
                    'message' => 'تم الحذف بنجاح',                
                    'status'  => 200,
                    'error'   => '',
                ]
            );
        }else{
            return $this
            ->respondCreated(
                [
                    'message' => 'حدث خطأ ما',                
                    'status'  => 500,
                    'error'   => '',
                ]
            );
        }
        

    }

}

?>