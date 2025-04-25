<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends MY_Controller {


	public function advanced()
	{
		$this->view('advanced');
	}

	public function general()
	{
		$this->view('general');
	}

	public function editors()
	{
		$this->view('editors');
	}


	public function validation()
	{
		$this->view('validation');
	}






	private function view($key)
	{
		$this->load->view('adminlte/forms/'.$key, $this->page_data);
	}

}

/* End of file Forms.php */
/* Location: ./application/controllers/adminlte/Forms.php */