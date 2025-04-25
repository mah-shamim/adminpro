<?= $this->extend('admin/layout/default') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?php echo lang('App.users') ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('App.home') ?></a></li>
          <li class="breadcrumb-item active"><?php echo lang('App.users') ?></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3"><?php echo lang('App.users') ?></h3>
                <div class="ml-auto p-2">
                    <?php if (hasPermissions('users_add')): ?>
                      <a href="<?php echo url('users/add') ?>" class="btn btn-primary btn-sm"><span class="pr-1"><i class="fa fa-plus"></i></span> <?php echo lang('App.new_user') ?></a>
                    <?php endif ?>
                </div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover table-striped">
                  <thead>
                  <tr>
                    <th><?php echo lang('App.id') ?></th>
                    <th><?php echo lang('App.user_image') ?></th>
                    <th><?php echo lang('App.user_name') ?></th>
                    <th><?php echo lang('App.user_email') ?></th>
                    <th><?php echo lang('App.user_role') ?></th>
                    <th><?php echo lang('App.user_last_login') ?></th>
                    <th><?php echo lang('App.user_status') ?></th>
                    <th><?php echo lang('App.action') ?></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($users as $row): ?>
                    <tr>
                      <td width="60"><?php echo $row->id ?></td>
                      <td width="50" class="text-center">
                        <img src="<?php echo userProfile($row->id) ?>" width="40" height="40" alt="" class="img-avtar">

                      </td>
                      <td>
                        <?php echo $row->name ?>
                      </td>
                      <td><?php echo $row->email ?></td>
                      <td><?php echo ucfirst(model('App\Models\RoleModel')->getRowById($row->role, 'title')) ?></td>
                      <td><?php echo ($row->last_login!='0000-00-00 00:00:00')?date( setting('date_format'), strtotime($row->last_login)):'No Record' ?></td>
                      <td>
                        <?php if (logged('id')!==$row->id): ?>
                          <input type="checkbox" name="my-checkbox"  onchange="updateUserStatus('<?php echo $row->id ?>', $(this).is(':checked') )" <?php echo ($row->status) ? 'checked' : '' ?> data-bootstrap-switch  data-off-color="secondary" data-on-color="success"  data-off-text="<?php echo lang('App.user_inactive') ?>" data-on-text="<?php echo lang('App.user_active') ?>">
                        <?php else: ?>
                          <input type="checkbox" name="my-checkbox" disabled data-bootstrap-switch  data-off-color="secondary" data-on-color="success"  data-off-text="<?php echo lang('App.user_inactive') ?>" data-on-text="<?php echo lang('App.user_active') ?>">
                        <?php endif ?>
                      </td>
                      <td>
                        <?php if (hasPermissions('users_edit')): ?>
                          <a href="<?php echo url('users/edit/'.$row->id) ?>" class="btn btn-sm btn-primary" title="<?php echo lang('App.edit_user') ?>" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                        <?php endif ?>
                        <?php if (hasPermissions('users_view')): ?>
                          <a href="<?php echo url('users/view/'.$row->id) ?>" class="btn btn-sm btn-info" title="<?php echo lang('App.view_user') ?>" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                        <?php endif ?>
                        <?php if (hasPermissions('users_delete')): ?>
                          <?php if ($row->id!=1 && logged('id')!=$row->id): ?>
                            <a href="<?php echo url('users/delete/'.$row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this user ?')" title="<?php echo lang('App.delete_user') ?>" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                          <?php else: ?>
                            <a href="#" class="btn btn-sm btn-danger" title="<?php echo lang('App.delete_user_cannot') ?>" data-toggle="tooltip" disabled><i class="fa fa-trash"></i></a>
                          <?php endif ?>
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
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



    <?= $this->endSection() ?>
<?= $this->section('js') ?>

<script>
window.updateUserStatus = (id, status) => {
  $.get( '<?php echo url('users/change_status') ?>/'+id, {
    status: status
  }, (data, status) => {
    if (data=='done') {
      // code
    }else{
      alert('<?php echo lang('App.user_unable_change_status') ?>');
    }
  })
}
</script>
<?=  $this->endSection() ?>
