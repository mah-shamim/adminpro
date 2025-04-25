<?= $this->extend('admin/layout/default') ?>
<?= $this->section('content') ?>


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?php echo lang('App.activity_logs') ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('App.home') ?></a></li>
          <li class="breadcrumb-item active"><?php echo lang('App.activity_logs') ?></li>
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
		  <h3 class="card-title"><?php echo lang('App.view_activity') ?></h3>

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
		          <td width="150"><?php echo lang('App.id') ?>: </td>
		          <td><strong><?php echo $activity->id ?></strong></td>
		        </tr>

		        <tr>
		          <td><?php echo lang('App.activity_message') ?>: </td>
		          <td><strong><?php echo $activity->title ?></strong></td>
		        </tr>

		        <tr>
		          <td><?php echo lang('App.user') ?>: </td>
		          <?php $User = model('App\Models\UserModel')->getById($activity->user) ?>
		          <td><strong><?php echo $activity->user > 0 ? $User->name : '' ?></strong> <a href="<?php echo url('users/view/'.$User->id) ?>" target="_blank"><i class="fa fa-eye"></i></a></td>
		        </tr>

		        <tr>
		          <td><?php echo lang('App.activity_datetime') ?>: </td>
		          <td><strong><?php echo date('h:m a - d M, Y', strtotime($activity->created_at)) ?></strong></td>
		        </tr>

		    </tbody>
		  </table>
		</div>
		<!-- /.card-body -->
	</div>

</section>


<?=  $this->endSection() ?>