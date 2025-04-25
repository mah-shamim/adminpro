<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Backup Management';
		$this->page_data['page']->menu = 'backup';
		ifPermissions('backup_db');
	}

	public function index()
	{
		$this->load->view('export', $this->page_data);
	}

	public function exportDB()
	{
		$this->load->dbutil();

		$prefs = array(     
		    'format'      => 'zip',             
		    'filename'    => 'my_db_backup.sql'
		    );


		$backup =& $this->dbutil->backup($prefs); 

		$db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
		$save = 'pathtobkfolder/'.$db_name;

		$this->load->helper('file');
		write_file($save, $backup); 


		$this->load->helper('download');
		force_download($db_name, $backup);

	}

}

/* End of file Backup.php */
/* Location: ./application/controllers/Backup.php */