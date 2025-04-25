<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function permission_denied()
	{
		$this->load->view('errors/html/error_403_permission', $this->page_data);
	}


}

/* End of file Errors.php */
/* Location: ./application/controllers/Errors.php */