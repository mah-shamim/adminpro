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
          <li class="breadcrumb-item"><a href="<?php echo url('/') ?>">Home</a></li>
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
      <h3 class="card-title"><?php echo lang('App.list_all_activities') ?></h3>

      <div class="card-tools pull-right">
        <button type="button" class="btn btn-card-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-card-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>

    </div>
    <div class="card-body">

      <div class="row">
        <div class="col-sm-12">
            <?php echo form_open('activityLogs', ['method' => 'GET', 'autocomplete' => 'off']); ?> 
            <div class="row">

                <div class="col-sm-2">
                  <div class="form-group">
                    <p style="margin-top: 20px"><strong><?php echo lang('App.filter') ?> :</strong> </p>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="Filter-IpAddress"><?php echo lang('App.activity_ip_address') ?> </label>
                    <input type="text" name="ip" id="Filter-IpAddress" onchange="$(this).parents('form').submit();" class="form-control" value="<?php echo get('ip') ?>" placeholder="Search by Ip Addres" />
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label for="Filter-User"><?php echo lang('App.user') ?></label>
                    <select name="user" id="Filter-User" onchange="$(this).parents('form').submit();" class="form-control select2">
                      <option value=""><?php echo lang('App.select_user') ?></option>
                      <?php foreach (model('App\Models\UserModel')->findAll() as $row): ?>
                        <?php $sel = (get('user')==$row->id)?'selected':'' ?>
                        <option value="<?php echo $row->id ?>" <?php echo $sel ?>><?php echo $row->name ?> #<?php echo $row->id ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>

                <div class="col-sm-2 text-right">
                  <div class="form-group" style="margin-top: 25px;">
                    <a href="<?php echo url('activityLogs') ?>" class="btn btn-danger"><?php echo lang('App.reset') ?></a>
                    <button type="submit" class="btn btn-primary"><?php echo lang('App.filter') ?></button>
                  </div>
                </div>

            </div>

          <?php echo form_close(); ?>
          
        </div>
      </div>

      <table id="dataTable1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><?php echo lang('App.id') ?></th>
            <th><?php echo lang('App.activity_ip_address') ?></th>
            <th><?php echo lang('App.activity_message') ?></th>
            <th><?php echo lang('App.activity_datetime') ?></th>
            <th><?php echo lang('App.action') ?></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($activity_logs as $row): ?>
            <tr>
              <td width="60"><?php echo $row->id ?></td>
              <td><?php echo !empty($row->ip_address)?'<a href="'.url('activityLogs/index?ip='.urlencode($row->ip_address)).'">'.$row->ip_address.'</a>':'N.A' ?></td>
              <td>
                <a href="<?php echo url('activityLogs/view/'.$row->id) ?>"><?php echo $row->title ?></a>
              </td>
              <td><?php echo date( setting('datetime_format') , strtotime($row->created_at)) ?></td>
              <td>
                <?php if (hasPermissions('activity_log_view')): ?>
                  <a href="<?php echo url('activityLogs/view/'.$row->id) ?>" class="btn btn-sm btn-default" title="View Activity" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                  <?php if ($row->user > 0): ?>
                    <a href="<?php echo url('users/view/'.$row->user) ?>" class="btn btn-sm btn-default" title="View User" target="_blank" data-toggle="tooltip"><i class="fa fa-user"></i></a>
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

</section>
<!-- /.content -->

<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script>

  $('#dataTable1').DataTable({
    "order": []
  })

  $('.select2').select2();

</script>
<?=  $this->endSection() ?>