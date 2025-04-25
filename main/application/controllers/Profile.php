<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Profile Management';
		$this->page_data['page']->menu = false;
	}

	public function index($tab = 'profile')
	{
		$this->page_data['user'] = $this->users_model->getById(logged('id'));
		$this->page_data['user']->role = $this->roles_model->getById( logged('role') );
		$this->page_data['activeTab'] = $tab;
		$this->load->view('account/profile', $this->page_data);
	}

	public function updateProfile()
	{

		$id = logged('id');
		
		postAllowed();

		$data = [
			'role' => post('role'),
			'name' => post('name'),
			'username' => post('username'),
			'email' => post('email'),
			'phone' => post('contact'),
			'address' => post('address'),
		];

		$id = $this->users_model->update($id, $data);

		$this->activity_model->add("User #$id updated the profile");

		$this->session->set_flashdata('alert-type', 'success');
		$this->session->set_flashdata('alert', 'Profile has been Updated Successfully');
		
		redirect('profile/index/edit');

	}

	public function updatePassword()
	{

		$id = logged('id');
		
		postAllowed();

		if ( post('password') !== post('password_confirm') ) {
			$this->session->set_flashdata('alert-type', 'danger');
			$this->session->set_flashdata('alert', 'Password does not matches with Confirm Password !');
			redirect('profile/index/change_password');
		}
		
		if ( strlen(post('password')) < 6 ) {
			$this->session->set_flashdata('alert-type', 'danger');
			$this->session->set_flashdata('alert', 'Password must have atleast 6 Characters');
			redirect('profile/index/change_password');
		}

		if ( hash('sha256', post('old_password')) != $this->users_model->getRowById($id, 'password') ) {
			$this->session->set_flashdata('alert-type', 'danger');
			$this->session->set_flashdata('alert', 'Invalid Old Password !');
			redirect('profile/index/change_password');
		}


		$password = post('password');

		$data['password'] = hash( "sha256", $password );

		$id = $this->users_model->update($id, $data);

		$this->activity_model->add("User #$id changed the password !");

		$this->session->set_flashdata('message_type', 'success');
		$this->session->set_flashdata('message', 'Password Changed, You need to Login Again !');
		
		redirect('login');

	}

	public function updateProfilePic()
	{

		$id = logged('id');
		
		if (!empty($_FILES['image']['name'])) {

			$path = $_FILES['image']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			$this->uploadlib->initialize([
				'file_name' => $id.'.'.$ext
			]);
			$image = $this->uploadlib->uploadImage('image', '/users');

			if($image['status']){
				$this->users_model->update($id, ['img_type' => $ext]);
			}

			$this->activity_model->add("User #$id Updated his/her Profile Image.");

			$this->session->set_flashdata('alert-type', 'success');
			$this->session->set_flashdata('alert', 'Profile Image has been Updated Successfully');

		}
		else{

			$this->session->set_flashdata('alert-type', 'danger');
			$this->session->set_flashdata('alert', 'Server Error Occured while Uploading Image !');

		}

		redirect('profile/index/change_pic');

	}

	public function change_language($code = '')
	{
		// $this->lang->load('basic', 'spanish');
		// die(var_dump( $this->lang->language ));
		setUserlang($code);
		redirect(!empty($_REQUEST['back']) ? urldecode($_REQUEST['back']) : '' );
	}


}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */