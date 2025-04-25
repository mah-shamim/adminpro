<?php

namespace App\Models;

use App\Models\BaseModel;

class EmailTemplateModel extends BaseModel
{
    protected $table      = 'email_templates';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['name', 'data', 'code'];
}