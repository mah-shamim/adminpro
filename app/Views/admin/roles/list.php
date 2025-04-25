<?= $this->extend('admin/layout/default') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?php echo lang('App.roles') ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('App.home') ?></a></li>
          <li class="breadcrumb-item active"><?php echo lang('App.roles') ?></li>
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
      <h3 class="card-title"><?php echo lang('App.list_roles') ?></h3>

      <div class="card-tools pull-right">
        <a href="<?php echo url('roles/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus pr-1"></i> <?php echo lang('App.create_role') ?></a>
      </div>

    </div>
    <div class="card-body">
      <table id="dataTable1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><?php echo lang('App.id') ?></th>
            <th><?php echo lang('App.role_name') ?></th>
            <th><?php echo lang('App.action') ?></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($roles as $row): ?>
            <tr>
              <td width="60"><?php echo $row->id ?></td>
              <td>
                <?php echo $row->title ?>
              </td>
              <td>
                <?php if (hasPermissions('roles_edit')): ?>
                  <a href="<?php echo url('roles/edit/'.$row->id) ?>" class="btn btn-sm btn-default" title="Edit User Role" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                <?php endif ?>
              </td>
            </tr>
          <?php endforeach ?>

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->


<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script>
  $('#dataTable1').DataTable()
</script>
<?=  $this->endSection() ?>
