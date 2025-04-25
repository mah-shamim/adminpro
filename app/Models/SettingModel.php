<?php

namespace App\Models;

use App\Models\BaseModel;

class SettingModel extends BaseModel
{
    protected $table      = 'settings';
    protected $primaryKey = 'id';
    protected $returnType     = 'object';
    protected $allowedFields = ['key', 'value', 'created_at'];

	public function getValueByKey($key = '')
	{
		return !empty($query = $this->Where(['key' => $key], 1)->first()) ? $query->row()->value : null;
	}

	public function getByKey($key = '')
	{
		return !empty($query = $this->Where(['key' => $key], 1)->first()) ? $query->row() : null;
	}

	public function updateByKey($key, $value)
	{
        // $data = (object) [
		// 	'key' => $key,
		// 	'value' => $value
		// ];
		$ret = $this->where('key', $key)->set('value', $value)->update();
        // $this->db->reset();
        return $ret;
	}
}