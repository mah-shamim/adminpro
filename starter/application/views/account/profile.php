<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1><?php echo lang('my_account') ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
          <li class="breadcrumb-item active"><?php echo lang('roles') ?></li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">


  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="card card-primary">
        <div class="card-body card-profile">
          <div class="text-center">
            <img class="profile-user-img img-responsive img-circle" src="<?php echo userProfile($user->id) ?>" alt="<?php echo lang('user_profile_image') ?>" />
          </div>

          <h3 class="profile-username text-center"><?php echo $user->name ?></h3>

          <p class="text-muted text-center"><?php echo $user->role->title ?></p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b><?php echo lang('user_username') ?></b> <a class="pull-right"><?php echo $user->username ?></a>
            </li>
            <li class="list-group-item">
              <b><?php echo lang('user_last_login') ?></b> <a class="pull-right"><?php echo date( setting('date_format'), strtotime($user->last_login)) ?></a>
            </li>
            <li class="list-group-item">
              <b><?php echo lang('member_since') ?> </b> <a class="pull-right"><?php echo date( setting('date_format'), strtotime($user->created_at)) ?></a>
            </li>
          </ul>

          <a href="<?php echo url('profile/index/edit') ?>" class="btn btn-primary btn-block"><b> <i class="fa fa-pencil"></i> <?php echo lang('edit') ?></b></a>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </div>
    <!-- /.col -->
    <div class="col-md-9">
    <div class="card">
      <div class="card-header p-2">
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="#viewProfile" class="nav-link <?php echo $activeTab=='profile'?'active':'' ?>" data-toggle="tab"><?php echo lang('profile') ?></a></li>
          <li class="nav-item"><a href="#editProfile" class="nav-link <?php echo $activeTab=='edit'?'active':'' ?>" data-toggle="tab"><?php echo lang('edit') ?></a></li>
          <li class="nav-item"><a href="#editProfilePic" class="nav-link <?php echo $activeTab=='change_pic'?'active':'' ?>" data-toggle="tab"><?php echo lang('change_profile_image') ?></a></li>
          <li class="nav-item"><a href="#changePassword" class="nav-link <?php echo $activeTab=='change_password'?'active':'' ?>" data-toggle="tab"><?php echo lang('change_password') ?></a></li>

          
        </ul>
      </div>

        <div class="card-body">
        <div class="tab-content">
          <div class="<?php echo $activeTab=='profile'?'active':'' ?> tab-pane" id="viewProfile">
            <table class="table table-bordered table-striped">
              <tbody>
                <tr>
                  <td width="160"><strong><?php echo lang('user_name') ?></strong>:</td>
                  <td><?php echo $user->name ?></td>
                </tr>
                <tr>
                  <td><strong><?php echo lang('user_username') ?></strong>:</td>
                  <td><?php echo $user->username ?></td>
                </tr>
                <tr>
                  <td><strong><?php echo lang('user_email') ?></strong>:</td>
                  <td><?php echo $user->email ?></td>
                </tr>
                <tr>
                  <td><strong><?php echo lang('user_role') ?></strong>:</td>
                  <td><?php echo $user->role->title ?></td>
                </tr>
                <tr>
                  <td><strong><?php echo lang('user_contact') ?></strong>:</td>
                  <td><?php echo $user->phone ?></td>
                </tr>
                <tr>
                  <td><strong><?php echo lang('user_address') ?></strong>:</td>
                  <td><?php echo nl2br($user->address) ?></td>
                </tr>
                <tr>
                  <td><strong><?php echo lang('user_last_login') ?></strong>:</td>
                  <td><?php echo ($user->last_login!='0000-00-00 00:00:00')?date( setting('datetime_format'), strtotime($user->last_login)):'No Record' ?></td>
                </tr>
                <tr>
                  <td><strong><?php echo lang('member_since') ?></strong>:</td>
                  <td><?php echo ($user->created_at!='0000-00-00 00:00:00')?date( setting('datetime_format'), strtotime($user->created_at)):'No Record' ?></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="<?php echo $activeTab=='edit'?'active':'' ?> tab-pane" id="editProfile">
            <?php echo form_open('/profile/updateProfile', ['method' => 'POST', 'autocomplete' => 'off', 'class' => 'form-horizontal form-validate']); ?> 


              <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label"><?php echo lang('user_name') ?></label>

                <div class="col-sm-10">
                  <input type="name" name="name" required class="form-control" id="inputName" value="<?php echo $user->name ?>" autofocus placeholder="<?php echo lang('user_name') ?>">
                </div>
              </div>

              <div class="form-group">
                <label for="inputUserName" class="col-sm-2 control-label"><?php echo lang('user_username') ?></label>

                <div class="col-sm-10">
                  <input type="text" class="form-control"  minlength="5" data-rule-remote="<?php echo url('users/check?notId='.$user->id) ?>" data-msg-remote="<?php echo lang('user_username_taken') ?>" name="username" id="inputUsername" required placeholder="<?php echo lang('user_username') ?>"  value="<?php echo $user->username ?>"/>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label"><?php echo lang('user_email') ?></label>

                <div class="col-sm-10">
                  <input type="email" name="email" required 
                   data-rule-remote="<?php echo url('users/check?notId='.$user->id) ?>" data-msg-remote="<?php echo lang('user_email_exists') ?>"
                   class="form-control" id="inputEmail" placeholder="<?php echo lang('user_email') ?>" value="<?php echo $user->email ?>">
                </div>
              </div>

              <div class="form-group">
                <label for="inputContact" class="col-sm-2 control-label"><?php echo lang('user_contact') ?></label>

                <div class="col-sm-10">
                  <input type="name" name="contact" class="form-control" id="inputContact" value="<?php echo $user->phone ?>" placeholder="<?php echo lang('user_contact') ?>">
                </div>
              </div>

              <div class="form-group">
                <label for="inputContact" class="col-sm-2 control-label"><?php echo lang('user_address') ?></label>

                <div class="col-sm-10">
                  <textarea type="text" class="form-control" name="address" id="inputAddress" placeholder="<?php echo lang('user_address') ?>" rows="3"><?php echo $user->address ?></textarea>
                </div>
              </div>

              <div class="form-group hidden">
                <label for="inputContact" class="col-sm-2 control-label"><?php echo lang('user_role') ?></label>

                <div class="col-sm-10">
                  <select name="role" id="inputRole" class="form-control select2" style="width:100%;">
                    <option value=""><?php echo lang('user_select_role') ?></option>
                    <?php foreach ($this->roles_model->get() as $row): ?>
                      <?php $sel = !empty($user->role) && $user->role->id==$row->id ? 'selected' : '' ?>
                      <option value="<?php echo $row->id ?>" <?php echo $sel ?>><?php echo $row->title ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-flat"><?php echo lang('submit') ?></button>
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.tab-pane -->
          <div class="<?php echo $activeTab=='change_password'?'active':'' ?> tab-pane" id="changePassword">
            <?php echo form_open('/profile/updatePassword', ['method' => 'POST', 'autocomplete' => 'off', 'class' => 'form-horizontal form-validate']); ?> 

              <div class="alert alert-warning">
                <?php echo lang('message_login_again_after_password') ?>
              </div>

              <div class="alert alert-info">
                <?php echo lang('message_password_atleast_long') ?>
              </div>

              <div class="form-group">
                <label for="inputContact" class="col-sm-2 control-label"><?php echo lang('old_password') ?></label>

                <div class="col-sm-10">
                  <div class="input-group">
                    <div class="input-group-append"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                    <input type="password" class="form-control" placeholder="<?php echo lang('old_password') ?>" minlength="6" name="old_password" required autofocus id="old_password" />
                    <!-- <span class="fa fa-lock form-control-feedback"></span> -->
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputContact" class="col-sm-2 control-label"><?php echo lang('new_password') ?></label>

                <div class="col-sm-10">
                  <div class="input-group">
                    <div class="input-group-append"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                    <input type="password" class="form-control" placeholder="<?php echo lang('new_password') ?>" minlength="6" name="password" required autofocus id="password" />
                  </div>
                </div>
              </div>

              <div class="form-group">
               
                <label for="inputContact" class="col-sm-2 control-label"><?php echo lang('confirm_new_password') ?></label>

                <div class="col-sm-10">
                  <div class="input-group">
                    <div class="input-group-append"><span class="input-group-text"><i class="fa fa-lock"></i></span></div>
                    <input type="password" class="form-control" equalTo="#password" placeholder="<?php echo lang('confirm)new_password') ?>" required name="password_confirm" />
                  </div>
                </div>

              </div>

              

              

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-flat"><?php echo lang('submit') ?></button>
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.tab-pane -->
          <div class="<?php echo $activeTab=='change_pic'?'active':'' ?> tab-pane" id="editProfilePic">
            <?php echo form_open('/profile/updateProfilePic', ['method' => 'POST', 'autocomplete' => 'off', 'class' => 'form-horizontal form-validate', 'enctype' => 'multipart/form-data']); ?> 

              <div class="form-group">
                <label for="formAdmin-Image" class="col-sm-2 control-label"><?php echo lang('user_profile_image') ?></label>

                <div class="col-sm-10">
                  <input type="file" class="form-control" name="image" id="formAdmin-Image" placeholder="Upload Image" required accept="image/*" onchange="previewImage(this, '#imagePreview')">
                </div>
              </div>       
              <div class="form-group" id="imagePreview">
                <div class="col-sm-10">
                  <img src="<?php echo userProfile($user->id) ?>" class="img-circle" width="150" alt="<?php echo lang('user_profile_image') ?>">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-flat"><?php echo lang('submit') ?></button>
                </div>
              </div>
            <?php echo form_close(); ?>
          </div>
          <!-- /.tab-pane -->
          

          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->

<script>
  $(document).ready(function() {
    $('.form-validate').each(function() {
      $(this).validate();
    });
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

<script>
      //Initialize Select2 Elements
    $('.select2').select2()
</script>