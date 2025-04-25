<?php
namespace App\Controllers;

use App\Controllers\AdminBaseController;

use App\Models\UserModel;
use App\Models\RoleModel;

class Profile extends AdminBaseController
{

    public $title = 'Profile Management';
    public $menu = false;


	public function index($tab = 'profile')
	{
		$user = (new UserModel)->getById(logged('id'));
		$user->role = (new RoleModel)->getById( logged('role') );
		$activeTab = $tab;
		return view('admin/account/profile', compact('user', 'activeTab'));
	}

	public function updateProfile()
	{

		$id = logged('id');
		
		postAllowed();

		$data = [
			// 'role' => post('role'),
			'name' => post('name'),
			'username' => post('username'),
			'email' => post('email'),
			'phone' => post('contact'),
			'address' => post('address'),
		];

		$id = (new UserModel)->update($id, $data);

		model('App\Models\ActivityLogModel')->add("User #$id updated the profile");
		
		return redirect()->to('profile/index/edit')->with('notifySuccess', 'Profile has been Updated Successfully');

	}

	public function updatePassword()
	{

		$id = logged('id');
		
		postAllowed();

		if ( post('password') !== post('password_confirm') ) {
			return redirect()->to('profile/index/change_password')->with('notifyError', 'Password does not matches with Confirm Password !');
		}
		
		if ( strlen(post('password')) < 6 ) {
			return redirect()->to('profile/index/change_password')->with('notifyError', 'Password must have atleast 6 Characters');
		}

		if ( hash('sha256', post('old_password')) != (new UserModel)->getRowById($id, 'password') ) {
			// die(var_dump(hash('sha256', post('old_password')), (new UserModel)->getRowById($id, 'password') ));
			return redirect()->to('profile/index/change_password')->with('notifyError', 'Invalid Old Password !');
		}


		$password = post('password');

		$data['password'] = hash( "sha256", $password );

		$id = (new UserModel)->update($id, $data);

		model('App\Models\ActivityLogModel')->add("User #$id changed the password !");

		return redirect()->to('login')->with('notifySuccess', 'Password Changed, You need to Login Again !');

	}

	public function updateProfilePic()
	{
		if (! $this->validate([
            'image' => [
                'label' => 'Profile Image',
                'rules' => 'uploaded[image]'
                    . '|is_image[image]'
                    . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
            ],
        ])) {
            // $data = ['errors' => $this->validator->getErrors()];
			return redirect()->to('profile/index/change_pic')->with('notifyError', $this->validator->getErrors()['image']);
        }

		$id = logged('id');
		
		$img = $this->request->getFile('image');
		
		if (!empty($_FILES['image']['name'])) {

			$ext = $img->getExtension();
			$upload = $img->move( FCPATH.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'users', $id.'.'.$ext, true );
			if(!$upload){
				return redirect()->to('profile/index/change_pic')->with('notifyError', 'Server Error Occured while Uploading Image !');
			}

			(new UserModel)->update($id, ['img_type' => $ext]);

			model('App\Models\ActivityLogModel')->add("User #$id Updated his/her Profile Image.");

			return redirect()->to('profile/index/change_pic')->with('notifySuccess', 'Profile Image has been Updated Successfully');

		}

		return redirect()->to('profile/index/change_pic')->with('notifyError', 'Server Error Occured while Uploading Image !');

	}

	public function change_language($code = '')
	{
		return redirect()->to(!empty($_REQUEST['back']) ? urldecode($_REQUEST['back']) : '/' )->setCookie('current_lang', $code, time()+86400*30);
	}


}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */