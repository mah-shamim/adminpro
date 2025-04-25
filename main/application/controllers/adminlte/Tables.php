<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends MY_Controller {

	public function simple()
	{
		$this->view('simple');
	}

	public function data()
	{
		$this->view('data');
	}

	public function jsgrid()
	{
		$this->view('jsgrid');
	}






	private function view($key)
	{
		$this->load->view('adminlte/tables/'.$key, $this->page_data);
	}

}

/* End of file Tables.php */
/* Location: ./application/controllers/adminlte/Tables.php */