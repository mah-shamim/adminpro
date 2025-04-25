<?php
namespace App\Controllers;

use App\Models\ActivityLogModel;
use App\Controllers\AdminBaseController;

class ActivityLogs extends AdminBaseController
{
    
    public $title = 'Activity Logs';
    public $menu = 'activity_logs';

	public function index()
	{
        $this->permissionCheck('activity_log_list');
		$ip = !empty(get('ip')) ? urldecode(get('ip')) : false;
		$user = !empty(get('user')) ? urldecode(get('user')) : false;

		$arg = [];

		if($ip)
			$arg['ip_address'] = $ip;

		if($user)
			$arg['user'] = $user;

		$activity_logs = (new ActivityLogModel)->getByWhere($arg, [
			'order' => [ 'id', 'desc' ]
		]);
		$filter_ip = $ip;
		$filter_user = $user;
		return  view('admin/activity_logs/list', compact('activity_logs', 'filter_ip', 'filter_user'));

	}

	public function view($id)
	{
        $this->permissionCheck('activity_log_view');
		$activity = (new ActivityLogModel)->getById($id);
		return  view('admin/activity_logs/view', compact('activity'));

	}
    
}
