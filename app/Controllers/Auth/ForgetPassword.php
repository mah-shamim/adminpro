<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\EmailTemplateModel;

class ForgetPassword extends BaseController
{

    public function index()
    {
        return view('admin/auth/forget');
    }

    public function reset()
    {

        $userModel = (new UserModel);

        // validate
        if (! $this->validate([
            'username' => 'required|usernameValidation[username]',
            'g-recaptcha-response' => 'validateRecaptcha[g-recaptcha-response]',
        ],[
            'username' => [
                'usernameValidation' => 'Invalid username or email'
            ],
            'g-recaptcha-response' => [
                'required' => 'Recaptcha is required',
                'validateRecaptcha' => 'Google Recaptcha not valid !'
            ]
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        
        $user = $userModel->where('username', post('username'))->orWhere('email', post('username'))->first();
        
        $reset_token	=	password_hash((time().$user->id), PASSWORD_BCRYPT);
        
        (new UserModel)->updateById($user->id, compact('reset_token'));

		$reset_link = url('auth/forgetPassword/setNewPassword?token='.$reset_token);

        $data = getEmailShortCodes();
		$data['user_id'] = $user->id;
		$data['user_name'] = $user->name;
		$data['user_email'] = $user->email;
		$data['user_username'] = $user->username;
		$data['reset_link'] = $reset_link;

        $parser = \Config\Services::parser();

        $template = (new EmailTemplateModel)->getByWhere([
            'code' => 'reset_password'
        ])[0]->data;
		
        $html = $parser->setData($data)->renderString($template);

        $config = [
            'protocol' => 'smtp',
            'SMTPHost' => "smtp.mailtrap.io",
            'SMTPUser' => "e1affcdba952a0",
            'SMTPPass' => "69d7ef53b9d41b",
            'SMTPTimeout' => "300",
            "mailType" => "html"

        ];


        $email = \Config\Services::email();

        $email->initialize($config);
        $email->setFrom(setting('company_email'), setting('company_name'));
        $email->setTo($user->email);

        $email->setSubject('Account Reset Password Request Received | ' . setting('company_name') );
        $email->setMessage($html);

        if(!$email->send()){
            die(var_dump( $email->printDebugger(['headers']) ));
            return redirect()->to('auth/forgetPassword')->with('alertError', "Unable to Send Email");

        }
        
        return redirect()->to('auth/forgetPassword')->with('alertSuccess', 'A Email has been Sent to '.obfuscate_email($user->email).' with link to set new password ! Kindly check your email');
    }

    public function setNewPassword()
    {
		$reset_token = !empty(get('token')) ? get('token') : false;
		
        $reset_token = !empty(post('token')) ? post('token') : $reset_token;

		$user = (new UserModel)->getByWhere(['reset_token' => $reset_token]);

		if(!$reset_token || !$user || empty($user)){
			return redirect()->to('auth/login')->with('alertError', 'Invalid Request');
		}

		$user = $user[0];

		return view('admin/auth/set_password', compact('user'));
    }

    public function DoSetPassword()
    {
        
        // validate
        if (! $this->validate([
            'token' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|matches[password]',
            'g-recaptcha-response' => 'validateRecaptcha[g-recaptcha-response]',
        ],[
            'g-recaptcha-response' => [
                'required' => 'Recaptcha is required',
                'validateRecaptcha' => 'Google Recaptcha not valid !'
            ]
        ])) {
            return redirect()->to('setNewPassword')->withInput()->with('errors', $this->validator->getErrors());
        }
        
		$reset_token = post('token');

		$user	=	(new UserModel)->getByWhere(compact('reset_token'));

        if(!isset($user[0])){
            return redirect()->back()->withInput()->with('alertError', "Invalid Token");
        }

        (new userModel)->updateById($user[0]->id, [
            'password'	=>	hash( "sha256", post('password') ),
			'reset_token'	=>	'',
        ]);
        
        return redirect()->to('auth/login')->with('alertSuccess', "New Password has been Updated, You can login now");
    }

}
