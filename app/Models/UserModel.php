<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $db;
    
    public function __construct()
	{
		$this->db = \Config\Database::connect();// connect to database  
	}

    public function add_new_project($project_data)
    {
        $builder = $this->db->table('projects');
        return $builder->insert($project_data);
    }

}

?>