<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

use App\Models\User;

class Logout extends BaseController
{
    public function index()
    {
		helper('cookie');
        // Deleting Sessions
		$this->session->remove('login');
		$this->session->remove('logged');
		// Deleting Cookie
		delete_cookie('login');
		delete_cookie('logged');
		delete_cookie('login_token');

        return redirect()->to('auth/login')->with('notify_success', 'Logged out ');
    }

}
