<?php
namespace Modules\Controllers;

use App\Controllers\AdminBaseController;
use \Hermawan\DataTables\DataTable;


class Modules extends AdminBaseController {

    public $title = 'AdminLte Dashboard';
    public $menu = false;
    
    public function index() {
        return view('\Modules\Views\modules\list');
    }
    
}
