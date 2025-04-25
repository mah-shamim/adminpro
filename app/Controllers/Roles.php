<?php
namespace App\Controllers;

use App\Controllers\AdminBaseController;
use App\Models\RoleModel;
use App\Models\RolePermissionModel;

class Roles extends AdminBaseController
{

    public $title = 'Roles Management';
    public $menu = 'roles';

	public function index()
	{
		$this->permissionCheck('roles_list');
		$roles = (new RoleModel)->findAll();
		return view('admin/roles/list', compact('roles'));
	}

	public function add()
	{
		$this->permissionCheck('roles_add');
		return view('admin/roles/add');
	}

	public function save()
	{

		$this->permissionCheck('roles_add');
		
		postAllowed();

		$role = (new RoleModel)->create([
			'title' => post('name'),
		]);

		$Data = [];
		foreach (post('permission') as $permission) {
			array_push($Data, [
				'role' => $role,
				'permission' => $permission,
			]);
		}

		(new RolePermissionModel)->createBatch($Data);

		model('App\Models\ActivityLogModel')->add("New Role #$role Created by User: #".logged('id'));

        return redirect()->to('roles')->with('notifySuccess', 'New Role Created Successfully');

	}

	public function edit($id)
	{
		$this->permissionCheck('roles_edit');

		$role = (new RoleModel)->getById($id);
		$permissions = (new RolePermissionModel)->getByWhere([
			'role' => $role->id
		]);

		$_permissions = array_map(function($data)
		{
			return $data->permission;
		}, $permissions);

		$role_permissions = $_permissions;
		return view('admin/roles/edit', compact('role', 'role_permissions', 'permissions'));
	}


	public function update($id)
	{

		// $this->permissionCheck('roles_edit');
		
		postAllowed();

		$data = [
			'title' => post('name'),
		];

		if(!empty($password = post('password')))
			$data['password'] = hash( "sha256", $password );

		(new RoleModel)->update($id, $data);
        $role = $id;
        
		// Data which will be added
		$Data = [];
		foreach (post('permission') as $permission) {
			if( !empty((new RolePermissionModel)->getByWhere([ 'role' => $id, 'permission' => $permission ])) ){ }else{
				array_push($Data, [
					'role' => $role,
					'permission' => $permission,
				]);
			}
		}

		if(!empty($Data))
			(new RolePermissionModel)->createBatch($Data);

		$all_permissions = (new RolePermissionModel)->getByWhere([
			'role' =>  $role
		]);

		if(!empty($all_permissions)){
			// Permissions which will be deleted
			foreach ($all_permissions as $data) {
				
				if(!in_array($data->permission, post('permission'))){
					(new RolePermissionModel)->delete($data->id);
				}
			
			}
		}
		
		model('App\Models\ActivityLogModel')->add("Role #$role Updated by User: #".logged('id'));

        return redirect()->to('roles')->with('notifySuccess', 'User Role has been Updated Successfully');

	}

}

/* End of file Roles.php */
/* Location: ./application/controllers/Roles.php */