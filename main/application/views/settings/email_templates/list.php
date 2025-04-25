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

        <div class="card-header with-border">
          <h3 class="card-title"><?php echo lang('email_templates') ?></h3>
        </div>

        <div class="card-body">

          <table id="dataTable1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><?php echo lang('id') ?></th>
            <th><?php echo lang('settings_email_code') ?></th>
            <th><?php echo lang('settings_email_name') ?></th>
            <th><?php echo lang('action') ?></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($this->templates_model->get() as $row): ?>
            <tr>
              <td width="60"><?php echo $row->id ?></td>
              <td ><?php echo $row->code ?></td>
              <td ><?php echo $row->name ?></td>
              <td>
                  <a href="<?php echo url('settings/edit_email_templates/'.$row->id) ?>" class="btn btn-sm btn-default" title="<?php echo lang('edit') ?>" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
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
  </div>

</section>
<!-- /.content -->

<script>
  $(document).ready(function() {
    $('.form-validate').validate();

      //Initialize Select2 Elements
    $('.select2').select2()

  })

  function previewImage(input, previewDom) {

    if (input.files && input.files[0]) {

      $(previewDom).show();

      var reader = new FileReader();

      reader.onload = function(e) {
        $(previewDom).find('img').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }else{
      $(previewDom).hide();
    }

  }
</script>

<?php include viewPath('includes/footer'); ?>

