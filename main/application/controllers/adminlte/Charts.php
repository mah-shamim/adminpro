<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends MY_Controller {


	public function chartjs()
	{
		$this->view('chartjs');
	}

	public function flot()
	{
		$this->view('flot');
	}

	public function inline()
	{
		$this->view('inline');
	}

	public function morris()
	{
		$this->view('morris');
	}

	private function view($key)
	{
		$this->load->view('adminlte/charts/'.$key, $this->page_data);
	}

}

/* End of file Chartjs.php */
/* Location: ./application/controllers/adminlte/Chartjs.php */