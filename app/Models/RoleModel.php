<?php

namespace App\Models;

use App\Models\BaseModel;

class RoleModel extends BaseModel
{
    protected $table      = 'roles';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['title'];
}