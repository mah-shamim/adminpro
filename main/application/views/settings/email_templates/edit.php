<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?php echo lang('settings') ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
          <li class="breadcrumb-item active"><?php echo lang('settings') ?></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="row">

    <div class="col-sm-3">

      <?php include VIEWPATH.'/settings/sidebar.php'; ?>

    </div>
    <div class="col-sm-9">

      <!-- Default card -->
      <div class="card">
       
        <?php echo form_open_multipart('settings/update_email_templates/'.$template->id, [ 'class' => 'form-validate', 'autocomplete' => 'off', 'method' => 'post' ]); ?>

        <div class="card-header with-border">
          <h3 class="card-title"><?php echo lang('email_templates') ?></h3>

          <div class="card-tools pull-right">
            <a href="<?php echo url('settings/email_templates') ?>" class="btn btn-sm btn-default"><i class="fa fa-arrow-left"></i> &nbsp;&nbsp; <?php echo lang('email_templates') ?></a>
          </div>

        </div>

        <div class="card-body">

          <div class="form-group">
            <label for="Code"> <?php echo lang('settings_email_code') ?></label>
            <input type="text" class="form-control" readonly name="code" id="Code" value="<?php echo $template->code ?>" required placeholder="Enter Code" />
          </div>

          <div class="form-group">
            <label for="Name"> <?php echo lang('settings_email_name') ?></label>
            <input type="text" class="form-control" name="name" id="Name" value="<?php echo $template->name ?>" required placeholder="<?php echo lang('settings_email_name') ?>" autofocus />
          </div>

          <div class="form-group">
            <label for="Data"> <?php echo lang('settings_email_template') ?></label>
            <textarea name="data" rows="40" id="Data"><?php echo $template->data ?></textarea>
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-flat btn-primary"><?php echo lang('submit') ?></button>
          <a href="<?php echo url('settings/email_templates') ?>" class="btn btn-flat btn-danger pull-right"><?php echo lang('cancel') ?></a>
        </div>
        <!-- /.card-footer-->

        <?php echo form_close(); ?>

      </div>
      <!-- /.card -->

    </div>
  </div>

</section>
<!-- /.content -->

<script>
  $(document).ready(function() {
    $('.form-validate').validate();

  })

</script>

<?php include viewPath('includes/footer'); ?>

<!-- CK Editor -->
<script src="<?php echo $url->assets ?>plugins/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('Data')
  })
</script>
