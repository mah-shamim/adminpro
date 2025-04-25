<?php
namespace App\Controllers;

use App\Controllers\AdminBaseController;
use App\Models\SettingModel;
use App\Models\EmailTemplateModel;

class Settings extends AdminBaseController
{

    public $title = 'Settings';
    public $menu = 'settings';

	public function index()
	{
		$this->general();
	}

	public function general()
	{
		$this->permissionCheck('general_settings');
		
		$this->updatePageData([ 'submenu' => 'general' ]);

		return view('admin/settings/general');
	}

	public function generalUpdate()
	{

		$this->permissionCheck('general_settings');

		postAllowed();

        $setting = new SettingModel();

		$setting->updateByKey('date_format', post('date_format'));
		$setting->updateByKey('datetime_format', post('datetime_format'));
		$setting->updateByKey('google_recaptcha_enabled', post('google_recaptcha_enabled') == 'ok' ? 1 : 0 );
		$setting->updateByKey('google_recaptcha_sitekey', post('google_recaptcha_sitekey'));
		$setting->updateByKey('google_recaptcha_secretkey', post('google_recaptcha_secretkey'));
		$setting->updateByKey('timezone', post('timezone'));
		$setting->updateByKey('default_lang', post('default_lang'));

		model('App\Models\ActivityLogModel')->add("Company Settings Updated by User: #".logged('id'));
        
        return redirect()->to('settings/general')->with('notifySuccess', 'Settings has been Updated Successfully');
	}

	public function company()
	{
		$this->permissionCheck('company_settings');

		$this->updatePageData([ 'submenu' => 'company' ]);

		return view('admin/settings/company');
	}

	public function companyUpdate()
	{

		$this->permissionCheck('company_settings');

		postAllowed();

		$setting = new SettingModel();
		
		$setting->updateByKey('company_name', post('company_name'));
		$setting->updateByKey('company_email', post('company_email'));

		model('App\Models\ActivityLogModel')->add("Company Settings Updated by User: #".logged('id'));
		
		redirect('settings/company');

        return redirect()->to('settings/company')->with('notifySuccess', ' Settings has been Updated Successfully');
	}

	public function login_theme()
	{
		$this->permissionCheck('login_theme');
		$this->updatePageData([ 'submenu' => 'login_theme' ]);
		return view('admin/settings/login_theme', $this->page_data);
	}

	public function loginthemeUpdate()
	{

		$this->permissionCheck('login_theme');

		postAllowed();
		
		(new SettingModel)->updateByKey('login_theme', post('login_theme'));

		if (!empty($_FILES['image']['name'])) {

			$path = $_FILES['image']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			$this->uploadlib->initialize([
				'file_name' => 'login-bg.'.$ext
			]);
			$image = $this->uploadlib->uploadImage('image');

			if($image['status']){
				(new SettingModel)->updateByKey('bg_img_type', $ext);
			}

            model('App\Models\ActivityLogModel')->add("Login Theme Updated by User: #".logged('id'));

		}
            
        return redirect()->to('settings/company')->with('notifySuccess', 'Settings has been Updated Successfully');
	}

	public function email_templates()
	{
		$this->permissionCheck('email_templates');
		$this->updatePageData([ 'submenu' => 'email_templates' ]);
		return view('admin/settings/email_templates/list');
	}

	public function edit_email_templates($id)
	{
		$this->permissionCheck('email_templates');
		$this->updatePageData([ 'submenu' => 'email_templates' ]);
		$template = (new EmailTemplateModel)->getById($id);
		return view('admin/settings/email_templates/edit', compact('template'));
	}

	public function update_email_templates($id)
	{

		$this->permissionCheck('login_theme');

		postAllowed();
		
		(new EmailTemplateModel)->update($id, [
			// 'code'	=>	post('code'),
			'name'	=>	post('name'),
			'data'	=>	post('data'),
		]);

		model('App\Models\ActivityLogModel')->add("Email Template Updated by User: #".logged('id'));

        return redirect()->to('settings/email_templates')->with('notifySuccess', 'Email Template has been Updated Successfully');
	}

}

/* End of file Settings.php */
/* Location: ./application/controllers/Settings.php */