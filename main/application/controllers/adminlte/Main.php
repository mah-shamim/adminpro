<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

	public function widgets()
	{
		$this->view('widgets');
	}

	public function chartjs()
	{
		$this->view('chartjs');
	}

	public function dashboard()
	{
		$this->view('dashboard');
	}

	public function dashboard2()
	{
		$this->view('dashboard2');
	}

	public function dashboard3()
	{
		$this->view('dashboard3');
	}

	public function calendar()
	{
		$this->view('calendar');
	}

	public function gallery()
	{
		$this->view('gallery');
	}
	
	private function view($key)
	{
		$this->load->view('adminlte/'.$key, $this->page_data);
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/adminlte/Main.php */