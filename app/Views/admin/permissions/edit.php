<?= $this->extend('admin/layout/default') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?php echo lang('App.permissions') ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('App.home') ?></a></li>
          <li class="breadcrumb-item"><a href="<?php echo url('/permissions') ?>"><?php echo lang('App.permissions') ?></a></li>
          <li class="breadcrumb-item active"><?php echo lang('App.edit_permission') ?></li>
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
      <h3 class="card-title"><?php echo lang('App.edit_permission') ?></h3>

      <div class="card-tools pull-right">
        <a href="<?php echo url('permissions') ?>" class="btn btn-flat btn-default"><i class="fa fa-chevron-left"></i> &nbsp;&nbsp; <?php echo lang('App.permissions') ?></a>
      </div>

    </div>

    <?php echo form_open('permissions/update/'.$permission->id, [ 'class' => 'form-validate' ]); ?>
    <div class="card-body">

      <div class="form-group">
        <label for="formClient-Name"><?php echo lang('App.permission_name') ?></label>
        <input type="text" class="form-control" name="name" id="formClient-Name" required placeholder="<?php echo lang('App.permission_name') ?>" value="<?php echo $permission->title ?>" autofocus />
      </div>

      <div class="form-group">
        <label for="formClient-Code"><?php echo lang('App.permission_code') ?></label>
        <input type="text" class="form-control" data-rule-remote="<?php echo url('permissions/checkIfUnique?notId='.$permission->id) ?>" name="code" id="formClient-Code" required placeholder="<?php echo lang('App.permission_code') ?>" value="<?php echo $permission->code ?>" />
        <p style="color: red;">* code must be unique</p>
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <div class="row">
        <div class="col"><a href="<?php echo url('/permissions') ?>" onclick="return confirm('Are you sure you want to leave?')" class="btn btn-flat btn-danger"><?php echo lang('App.cancel') ?></a></div>
        <div class="col text-right"><button type="submit" class="btn btn-flat btn-primary"><?php echo lang('App.submit') ?></button></div>
      </div>
    </div>
    <!-- /.card-footer-->

    <?php echo form_close(); ?>

  </div>
  <!-- /.card -->

</section>
<!-- /.content -->

<?= $this->endSection() ?>
<?= $this->section('js') ?>

<script>
  $(document).ready(function() {
    $('.form-validate').validate({
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });

    $('.check-select-all-p').on('change', function() {

      $('.check-select-p').attr('checked', $(this).is(':checked'));
      
    })

    $('.table-DT').DataTable({
      "ordering": false,
    });
  })

</script>
<script>
      //Initialize Select2 Elements
    $('.select2').select2()
</script>
<?=  $this->endSection() ?>