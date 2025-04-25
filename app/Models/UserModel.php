<?php

namespace App\Models;

use App\Models\BaseModel;

class UserModel extends BaseModel
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    // protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    // protected $useSoftDeletes = false;
    
    protected $allowedFields = ['name', 'email', 'password', 'phone', 'address', 'last_login', 'role', 'reset_token', 'status', 'img_type'];

    // protected $useTimestamps = true;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}