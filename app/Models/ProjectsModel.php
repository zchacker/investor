<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectsModel extends Model
{
    protected $DBGroup    = 'default';
    protected $table      = 'projects';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id', 'title', 'domain', 'capital', 'share', 'description', 'call_time', 'approved', 'deleted' , 'user_id' , 'added_time'];

    protected $useTimestamps = false;
    protected $createdField  = 'added_time';// 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}