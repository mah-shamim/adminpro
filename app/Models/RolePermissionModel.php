<?php

namespace App\Models;

use App\Models\BaseModel;

class RolePermissionModel extends BaseModel
{
    protected $table      = 'role_permissions';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['role', 'permission'];
}