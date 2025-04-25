<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?php echo lang('activity_logs') ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
          <li class="breadcrumb-item active"><?php echo lang('activity_logs') ?></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>


<!-- Main content -->
<section class="content">

	<!-- Default card -->
	<div class="card">
		<div class="card-header with-border">
		  <h3 class="card-title"><?php echo lang('view_activity') ?></h3>

		  <div class="card-tools pull-right">
		    <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip"
		            title="Collapse">
		      <i class="fa fa-minus"></i></button>
		    <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
		      <i class="fa fa-times"></i></button>
		  </div>

		</div>
		<div class="card-body">

		  <table class="table table-bordered table-striped">
		    <thead>
		    </thead>
		    <tbody>

		        <tr>
		          <td width="150"><?php echo lang('id') ?>: </td>
		          <td><strong><?php echo $activity->id ?></strong></td>
		        </tr>

		        <tr>
		          <td><?php echo lang('activity_message') ?>: </td>
		          <td><strong><?php echo $activity->title ?></strong></td>
		        </tr>

		        <tr>
		          <td><?php echo lang('user') ?>: </td>
		          <?php $User = $this->users_model->getById($activity->user) ?>
		          <td><strong><?php echo $activity->user > 0 ? $User->name : '' ?></strong> <a href="<?php echo url('users/view/'.$User->id) ?>" target="_blank"><i class="fa fa-eye"></i></a></td>
		        </tr>

		        <tr>
		          <td><?php echo lang('activity_datetime') ?>: </td>
		          <td><strong><?php echo date('h:m a - d M, Y', strtotime($activity->created_at)) ?></strong></td>
		        </tr>

		    </tbody>
		  </table>
		</div>
		<!-- /.card-body -->
	</div>

</section>

<?php include viewPath('includes/footer'); ?>
