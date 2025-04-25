<?php
namespace Adminlte\Controllers;
use App\Controllers\AdminBaseController;

class Dashboard extends AdminBaseController {

    public $title = 'AdminLte Dashboard';
    public $menu = false;


    public function index() {
        return  view('Adminlte\Views\dashboard');
    }
}
