<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends MY_Controller {

	public function top_nav()
	{
		$this->view('top_nav');
	}
	public function top_nav_sidebar()
	{
		$this->view('top_nav_sidebar');
	}

	public function boxed()
	{
		$this->page_data['page']->body_classes = 'layout-boxed';
		$this->view('boxed');
	}

	public function fixed_sidebar()
	{
		$this->page_data['page']->body_classes = 'layout-fixed';
		$this->view('fixed_sidebar');
	}

	public function fixed_topnav()
	{
		$this->page_data['page']->body_classes = 'layout-navbar-fixed';
		$this->view('fixed_topnav');
	}

	public function fixed_footer()
	{
		$this->page_data['page']->body_classes = 'layout-footer-fixed';
		$this->view('fixed_footer');
	}

	public function collapsed_sidebar()
	{
		$this->page_data['page']->body_classes = 'sidebar-collapse';
		$this->view('collapsed_sidebar');
	}

	private function view($key)
	{
		$this->load->view('adminlte/layout/'.$key, $this->page_data);
	}

}

/* End of file Layout.php */
/* Location: ./application/controllers/adminlte/Layout.php */