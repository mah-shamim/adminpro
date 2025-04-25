<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examples extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->page_data['assets']	= $this->page_data['url']->assets;
	}

	public function error404()
	{
		$this->view('404');
	}

	public function error500()
	{
		$this->view('500');
	}

	public function blank()
	{
		$this->view('blank');
	}

	public function profile()
	{
		$this->view('profile');
	}

	public function invoice()
	{
		$this->view('invoice');
	}

	public function invoice_print()
	{
		$this->view('invoice_print');
	}

	public function lockscreen()
	{
		$this->view('lockscreen');
	}

	public function login()
	{
		$this->view('login');
	}

	public function forgot_password()
	{
		$this->view('forgot_password');
	}

	public function recover_password()
	{
		$this->view('recover_password');
	}

	public function legacy_user_menu()
	{
		$this->view('legacy_user_menu');
	}

	public function language_menu()
	{
		$this->view('language_menu');
	}

	public function pace()
	{
		$this->view('pace');
	}

	public function starter()
	{
		$this->view('starter');
	}

	public function register()
	{
		$this->view('register');
	}

	public function ecommerce()
	{
		$this->view('ecommerce');
	}

	public function projects()
	{
		$this->view('projects');
	}

	public function project_add()
	{
		$this->view('project_add');
	}

	public function project_edit()
	{
		$this->view('project_edit');
	}

	public function project_detail()
	{
		$this->view('project_detail');
	}

	public function contacts()
	{
		$this->view('contacts');
	}


	private function view($key)
	{
		$this->load->view('adminlte/examples/'.$key, $this->page_data);
	}

}

/* End of file Examples.php */
/* Location: ./application/controllers/adminlte/Examples.php */