<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>


<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo lang('users') ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><?php echo lang('home') ?></a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/users') ?>"><?php echo lang('users') ?></a></li>
              <li class="breadcrumb-item active"><?php echo $User->id ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->

<!-- Main content -->
<section class="content">

<div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3"><?php echo lang('view_user') ?></h3>
                <ul class="nav nav-pills ml-auto p-2">

					<li class="nav-item active"><a class="nav-link active" href="#tab_1" data-toggle="tab"><?php echo lang('overview') ?></a></li>
					<li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab"><?php echo lang('activity') ?></a></li>
					<?php if (hasPermissions('users_edit')): ?>
						<li class="nav-item"><a class="nav-link" href="<?php echo url('users/edit/'.$User->id) ?>"><?php echo lang('edit_user') ?></a></li>
					<?php endif ?>

                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
				  <div class="row">
      		<div class="col-sm-2" style="padding-left: 50px;">
      			<br>
      			<img src="<?php echo userProfile($User->id) ?>" width="150" class="img-circle" alt="">
      			<br>
      		</div>
      		<div class="col-sm-10" style="padding-left: 50px;">
      			<table class="table table-bordered table-striped">
      				<tbody>
      					<tr>
      						<td width="160"><strong><?php echo lang('user_name') ?></strong>:</td>
      						<td><?php echo $User->name ?></td>
      					</tr>
      					<tr>
      						<td><strong><?php echo lang('user_email') ?></strong>:</td>
      						<td><?php echo $User->email ?></td>
      					</tr>
      					<tr>
      						<td><strong><?php echo lang('user_contact') ?></strong>:</td>
      						<td><?php echo $User->phone ?></td>
      					</tr>
      					<tr>
      						<td><strong><?php echo lang('user_last_login') ?></strong>:</td>
      						<td><?php echo ($User->last_login!='0000-00-00 00:00:00')?date( setting('datetime_format'), strtotime($User->last_login)):'No Record' ?></td>
      					</tr>
      					<tr>
      						<td><strong><?php echo lang('user_username') ?></strong>:</td>
      						<td><?php echo $User->username ?></td>
      					</tr>
      					<tr>
      						<td><strong><?php echo lang('user_role') ?></strong>:</td>
      						<td><?php echo $User->role->title ?></td>
      					</tr>
      				</tbody>
      			</table>
      		</div>
      	</div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
				  <table id="dataTable1" class="table table-bordered table-striped">
					<thead>
					<tr>
						<th><?php echo lang('id') ?></th>
						<th><?php echo lang('activity_ip_address') ?></th>
						<th><?php echo lang('activity_message') ?></th>
						<th><?php echo lang('activity_datetime') ?></th>
						<th><?php echo lang('action') ?></th>
					</tr>
					</thead>
					<tbody>

					<?php foreach ($User->activity as $row): ?>
						<tr>
						<td width="60"><?php echo $row->id ?></td>
						<td><?php echo !empty($row->ip_address)?'<a href="'.url('activity_logs/index?ip='.urlencode($row->ip_address)).'">'.$row->ip_address.'</a>':'N.A' ?></td>
						<td>
							<a href="<?php echo url('activity_logs/view/'.$row->id) ?>"><?php echo $row->title ?></a>
						</td>
						<td><?php echo date('d M, Y', strtotime($row->created_at)) ?></td>
						<td>
							<a href="<?php echo url('activity_logs/view/'.$row->id) ?>" class="btn btn-sm btn-default" title="View Activity" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
						</td>
						</tr>
					<?php endforeach ?>

					</tbody>
				</table>
                  </div>
				  
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END CUSTOM TABS -->

</section>

<?php include viewPath('includes/footer'); ?>

<script>
	$('#dataTable1').DataTable({
    "order": []
  });
</script>
