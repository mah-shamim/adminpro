<?= $this->extend('admin/layout/default') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?php echo lang('App.settings') ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('App.home') ?></a></li>
          <li class="breadcrumb-item active"><?php echo lang('App.settings') ?></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <div class="row">

    <div class="col-sm-3">

      <?= $this->include('admin/settings/sidebar'); ?>

    </div>
    <div class="col-sm-9">

      <!-- Default card -->
      <div class="card">
       
        <?php echo form_open_multipart('settings/update_email_templates/'.$template->id, [ 'class' => 'form-validate', 'autocomplete' => 'off', 'method' => 'post' ]); ?>

        <div class="card-header with-border">
          <h3 class="card-title"><?php echo lang('App.email_templates') ?></h3>

          <div class="card-tools pull-right">
            <a href="<?php echo url('settings/email_templates') ?>" class="btn btn-sm btn-default"><i class="fa fa-arrow-left"></i> &nbsp;&nbsp; <?php echo lang('App.email_templates') ?></a>
          </div>

        </div>

        <div class="card-body">

          <div class="form-group">
            <label for="Code"> <?php echo lang('App.settings_email_code') ?></label>
            <input type="text" class="form-control" readonly name="code" id="Code" value="<?php echo $template->code ?>" required placeholder="Enter Code" />
          </div>

          <div class="form-group">
            <label for="Name"> <?php echo lang('App.settings_email_name') ?></label>
            <input type="text" class="form-control" name="name" id="Name" value="<?php echo $template->name ?>" required placeholder="<?php echo lang('App.settings_email_name') ?>" autofocus />
          </div>

          <div class="form-group">
            <label for="Data"> <?php echo lang('App.settings_email_template') ?></label>
            <textarea name="data" rows="40" id="Data"><?php echo $template->data ?></textarea>
          </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-flat btn-primary"><?php echo lang('App.submit') ?></button>
          <a href="<?php echo url('settings/email_templates') ?>" class="btn btn-flat btn-danger pull-right"><?php echo lang('App.cancel') ?></a>
        </div>
        <!-- /.card-footer-->

        <?php echo form_close(); ?>

      </div>
      <!-- /.card -->

    </div>
  </div>

</section>
<!-- /.content -->

<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script>
  $(document).ready(function() {
    $('.form-validate').validate();

  })

</script>


<!-- CK Editor -->
<script src="<?php echo assets_url('admin') ?>/plugins/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('Data')
  })
</script>
<?= $this->endSection() ?>
