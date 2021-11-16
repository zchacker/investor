<?php

namespace App\Controllers;

use \App\Models\AdminModel;
use \App\Models\ProjectsModel;


class Dash extends BaseController
{
	public function __construct(){
        $this->db      = \Config\Database::connect();
        $this->session = \Config\Services::session();

        $this->projectsModel = new ProjectsModel();        
    }

	public function index()
	{
		$data['tab'] = 1;
        print view('dashboard/header', $data);        
        print view('dashboard/index');        
        print view('dashboard/footer'); 
		
    }

	public function projects($status = 'pending' , $page = 1)
	{
		
		$project_status = 0;
		$deleted = 0;
		$completed = 0;

		$data['tab'] = 2;

        if($status == 'pending'){ 
            $data['tab'] = 3;			
        }else if($status == 'approved'){
            $data['tab'] = 2;
			$project_status = 1;
        }else if($status == 'deleted'){
            $data['tab'] = 4;
			$deleted = 1;
        }else{
            $data['tab'] = 5;
			$completed = 1;
        }

		$data['projects'] = $this->projectsModel->where(['approved' => $project_status , 'deleted' => $deleted , 'completed' => $completed])->paginate(20);
		$data['pager'] = $this->projectsModel->pager;	
		
        $data['title'] = 'المشاريع';                

        print view('dashboard/header', $data);        
        print view('dashboard/projects');        
        print view('dashboard/footer'); 

	}

	public function project($id)
	{

		if($_POST){
			$project_id = $_POST['project_id'];

			
			if(isset($_POST['reject'])){
				
				$update = array(
					'approved' => 0,
					'deleted' => 1
				);
				$this->projectsModel->where('id' , $id)->update($update);

			}else if(isset($_POST['accept'])){

				$update = array(
					'approved' => 1,
					'deleted' => 0
				);
				$this->projectsModel->update($id , $update);
				
			}

			die;
		}
		$data['project'] = $this->projectsModel->where('id' , $id)->first();

		$data['tab'] = 2;
		$data['title'] = 'تفاصيل المشروع';                

        print view('dashboard/header', $data);        
        print view('dashboard/project');        
        print view('dashboard/footer');

	}

}

?>