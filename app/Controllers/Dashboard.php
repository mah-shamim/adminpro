<?php

namespace App\Controllers;

use App\Controllers\AdminBaseController;

class Dashboard extends AdminBaseController
{

    public function index()
    {
        return view('admin/dashboard');
    }
}
