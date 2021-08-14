<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $db;
    
    public function __construct()
	{
		$this->db = \Config\Database::connect();// connect to database  
	}

    public function add_new_user($user_data)
    {
        $builder = $this->db->table('users');
        return $builder->insert($user_data);
    }

    public function get_user_data($username)
    {
        $builder = $this->db->table('users');
        $builder->where('phone =', $username);
        $builder->orWhere('email =', $username);
        $builder->limit(1);
                        
        if($builder->countAllResults() > 0)
        {        
            $builder->where('phone =', $username);
            $builder->orWhere('email =', $username);
            $query =  $builder->get()->getResult();            
            return $query;
        }
        else
        {
            return NULL;
        }        
    }

}
?>