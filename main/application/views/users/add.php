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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo url('/users') ?>"><?php echo lang('users') ?></a></li>
              <li class="breadcrumb-item active"><?php echo lang('new_user') ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->

<section class="content">

<?php echo form_open_multipart('users/save', [ 'class' => 'form-validate', 'autocomplete' => 'off' ]); ?>


  <div class="row">
    <div class="col-sm-6">
      <!-- Default card -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo lang('user_basic') ?></h3>
        </div>
        <div class="card-body">

          <div class="form-group">
            <label for="formClient-Name"><?php echo lang('user_name') ?></label>
            <input type="text" class="form-control" name="name" id="formClient-Name" required placeholder="<?php echo lang('user_enter_name') ?>" onkeyup="$('#formClient-Username').val(createUsername(this.value))" autofocus />
          </div>

          <div class="form-group">
            <label for="formClient-Contact"><?php echo lang('user_contact') ?></label>
            <input type="text" class="form-control" name="phone" id="formClient-Contact" placeholder="<?php echo lang('user_enter_contact') ?>" />
          </div>

        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

      <!-- Default card -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo lang('user_login_details') ?></h3>
        </div>
        <div class="card-body">

          <div class="form-group">
            <label for="formClient-Email"><?php echo lang('user_email') ?></label>
            <input type="email" class="form-control" name="email" data-rule-remote="<?php echo url('users/check') ?>" data-msg-remote="<?php echo lang('user_email_exists') ?>" id="formClient-Email" required placeholder="Enter email">
          </div>

          <div class="form-group">
            <label for="formClient-Username"><?php echo lang('user_username') ?></label>
            <input type="text" class="form-control" data-rule-remote="<?php echo url('users/check') ?>" data-msg-remote="<?php echo lang('user_username_take') ?>" name="username" id="formClient-Username" required placeholder="<?php echo lang('user_enter_username') ?>" />
          </div>

          <div class="form-group">
            <label for="formClient-Password"><?php echo lang('user_password') ?></label>
            <input type="password" class="form-control" name="password" minlength="6" id="formClient-Password" required placeholder="<?php echo lang('user_password') ?>">
          </div>

          <div class="form-group">
            <label for="formClient-ConfirmPassword"><?php echo lang('user_password_confirm') ?></label>
            <input type="password" class="form-control" name="confirm_password" equalTo="#formClient-Password" id="formClient-ConfirmPassword" required placeholder="<?php echo lang('user_password_confirm') ?>">
          </div>

        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->
      
    </div>
    <div class="col-sm-6">
      <!-- Default card -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo lang('user_other_details') ?></h3>
        </div>
        <div class="card-body">

          <div class="form-group">
            <label for="formClient-Address"><?php echo lang('user_address') ?></label>
            <textarea type="text" class="form-control" name="address" id="formClient-Address" placeholder="<?php echo lang('user_enter_address') ?>" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="formClient-Role"><?php echo lang('user_role') ?></label>
            <select name="role" id="formClient-Role" class="form-control select2" required>
              <option value=""><?php echo lang('user_select_role') ?></option>
              <?php foreach ($this->roles_model->get() as $row): ?>
                <?php $sel = !empty(get('role')) && get('role')==$row->id ? 'selected' : '' ?>
                <option value="<?php echo $row->id ?>" <?php echo $sel ?>><?php echo $row->title ?></option>
              <?php endforeach ?>
            </select>
          </div>

          <div class="form-group">
            <label for="formClient-Status"><?php echo lang('user_status') ?></label>
            <select name="status" id="formClient-Status" class="form-control">
              <option value="1" selected><?php echo lang('user_active') ?></option>
              <option value="0"><?php echo lang('user_inactive') ?></option>
            </select>
          </div>

        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->
    
      <!-- Default card -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo lang('user_profile_image') ?></h3>
        </div>
        <div class="card-body">

          <div class="form-group">
            <label for="formClient-Image"><?php echo lang('user_image') ?></label>
            <input type="file" class="form-control" name="image" id="formClient-Image" placeholder="<?php echo lang('user_upload_image') ?>" accept="image/*" onchange="previewImage(this, '#imagePreview')">
          </div>
          <div class="form-group" id="imagePreview">
            <img src="<?php echo userProfile('default') ?>" class="img-circle" alt="<?php echo lang('user_upload_image_preview') ?>" width="100" height="100">
          </div>

        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    </div>
  </div>

  <!-- Default card -->
  <div class="card">
    <div class="card-footer">
      <div class="row">
        <div class="col"><a href="<?php echo url('/users') ?>" onclick="return confirm('Are you sure you want to leave?')" class="btn btn-flat btn-danger"><?php echo lang('cancel') ?></a></div>
        <div class="col text-right"><button type="submit" class="btn btn-flat btn-primary"><?php echo lang('submit') ?></button></div>
      </div>
    </div>
    <!-- /.card-footer-->

  </div>
  <!-- /.card -->

<?php echo form_close(); ?>

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

  function createUsername(name) {
      return name.toLowerCase()
        .replace(/ /g,'_')
        .replace(/[^\w-]+/g,'')
        ;;
  }

</script>

<?php include viewPath('includes/footer'); ?>

