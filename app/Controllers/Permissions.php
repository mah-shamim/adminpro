<?php
namespace App\Controllers;

use App\Controllers\AdminBaseController;

use App\Models\PermissionModel;

class Permissions extends AdminBaseController
{

    public $title = 'Permissions Management';
    public $menu = 'permissions';

	public function index()
	{
		
		$this->permissionCheck('permissions_list');

		$permissions = (new PermissionModel)->findAll();
		return view('admin/permissions/list', compact('permissions'));
	}

	public function add()
	{

		$this->permissionCheck('permissions_add');

		return view('admin/permissions/add');
	}

	public function edit($id)
	{

		$this->permissionCheck('permissions_edit');

		$permission = (new PermissionModel)->getById($id);
		return view('admin/permissions/edit', compact('permission'));

	}

	public function save()
	{
		
		postAllowed();

		$this->permissionCheck('permissions_add');

		$permission = (new PermissionModel)->create([
			'title' => post('name'),
			'code' => post('code'),
		]);

		model('App\Models\ActivityLogModel')->add("New Permission #$permission Created by User: #".logged('id'));

        return redirect()->to('permissions')->with('notifySuccess', 'New Permission Created Successfully');

	}

	public function update($id)
	{
		
		postAllowed();

		$this->permissionCheck('permissions_edit');

		$data = [
			'title' => post('name'),
			'code' => post('code'),
		];

		$permission = (new PermissionModel)->update($id, $data);

		model('App\Models\ActivityLogModel')->add("Permission #$id Updated by User: #".logged('id'));
        
        return redirect()->to('permissions')->with('notifySuccess', 'Permission has been Updated Successfully');

	}

	public function delete($id)
	{

		$this->permissionCheck('permissions_delete');

		(new PermissionModel)->delete($id);

		model('App\Models\ActivityLogModel')->add("Permission #$id Deleted by User: #".logged('id'));

        return redirect()->to('permissions')->with('notifySuccess', 'Permission has been Deleted Successfully');

	}

	public function checkIfUnique()
	{
		
		$code = get('code');

		if(!$code)
			die('Invalid Request');

		$arg = [ 'code' => $code ];

		if(!empty(get('notId')))
			$arg['id !='] = get('notId');

		$query = (new PermissionModel)->getByWhere($arg);

		if(!empty($query))
			die('false');
		else
			die('true');
		

	}

}

/* End of file Permissions.php */
/* Location: ./application/controllers/Permissions.php */