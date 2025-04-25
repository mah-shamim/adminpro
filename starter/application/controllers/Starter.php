<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Starter extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Starter (Blank Page)';
		$this->page_data['page']->menu = 'starter';
	}

	public function index()
	{
		$this->load->view('blank_page', $this->page_data);
	}

}

/* End of file Starter.php */
/* Location: ./application/controllers/Starter.php */