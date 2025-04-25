<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates_model extends MY_Model {

	public $table = 'email_templates';

	public function __construct()
	{
		parent::__construct();
	}

	public function getTemplateByCode($code = '')
	{
		return ($query = $this->db->get_where($this->table, ['code' => $code], 1)) && $query->num_rows() > 0 ? $query->row()->data : null;
	}

	public function getByCode($code = '')
	{
		return ($query = $this->db->get_where($this->table, ['code' => $code], 1)) && $query->num_rows() > 0 ? $query->row() : null;
	}

	public function updateByCode($code, $data)
	{
		$this->db->where('code', $code);
		return $this->db->update($this->table, [
			'data' => $data
		]);
	}


}

/* End of file Templates_model.php */
/* Location: ./application/models/Templates_model.php */