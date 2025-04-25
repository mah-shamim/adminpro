<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mailbox extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function compose()
	{
		$this->view('compose');
	}

	public function mailbox()
	{
		$this->view('mailbox');
	}

	public function read_mail()
	{
		$this->view('read_mail');
	}






	private function view($key)
	{
		$this->load->view('adminlte/mailbox/'.$key, $this->page_data);
	}

}

/* End of file Mailbox.php */
/* Location: ./application/controllers/adminlte/Mailbox.php */