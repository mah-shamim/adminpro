
<div class="login-box">
<div class="login-logo">
    <a href="<?php echo url('/') ?>"><?php echo setting('company_name') ?></a>
  </div>

  <?php if(isset($message)): ?>
    <div class="alert alert-<?php echo $message_type ?>">
      <p><?php echo $message ?></p>
    </div>
  <?php endif; ?>

  <?php if(!empty($this->session->flashdata('message'))): ?>
    <div class="alert alert-<?php echo $this->session->flashdata('message_type'); ?>">
      <p><?php echo $this->session->flashdata('message') ?></p>
    </div>
  <?php endif; ?>
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?php echo lang('mesasge_set_password_step') ?></p>

      <?php echo form_open('/login/set_new_password', ['method' => 'POST', 'autocomplete' => 'off']); ?> 
    	<input type="hidden" value="<?php echo $user->reset_token ?>" />
        <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="<?php echo lang('new_password') ?>" minlength="6" name="password" required autofocus id="password" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <?php echo form_error('password', '<span style="display:block" class="error invalid-feedback">', '</div>'); ?>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" equalTo="#password" placeholder="<?php echo lang('confirm_new_password') ?>" required name="password_confirm" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <?php echo form_error('password_confirm', '<span style="display:block" class="error invalid-feedback">', '</div>'); ?>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block"><?php echo lang('update_password') ?></button>
          </div>
          <!-- /.col -->
        </div>
     <?php echo form_close(); ?>

      <p class="mt-3 mb-1">
        <a href="<?php echo url('login') ?>"><?php echo lang('signin') ?></a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="login-logo">
    <a href="<?php echo url('/') ?>"><b>Admin</b> Panel</a>
  </div>

  <hr>
  <div class="text-center">
  	<img src="<?php echo userProfile($user->id) ?>" width="150" class="img-circle" alt="Profile Image"><br>
  	<strong><?php echo $user->name ?></strong>
  </div>
  <hr>

    <p class="login-box-msg">Set New Password for you account !</p>

    <?php if(isset($message)): ?>
      <div class="alert alert-<?php echo $message_type ?>">
        <p><?php echo $message ?></p>
      </div>
    <?php endif; ?>

    <?php if(!empty($this->session->flashdata('message'))): ?>
      <div class="alert alert-<?php echo $this->session->flashdata('message_type'); ?>">
        <p><?php echo $this->session->flashdata('message') ?></p>
      </div>
    <?php endif; ?>


    <?php echo form_open('/login/set_new_password', ['method' => 'POST', 'autocomplete' => 'off']); ?> 
    	<input type="hidden" value="<?php echo $user->reset_token ?>" />
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Enter New Password..." minlength="6" name="password" required autofocus id="password" />
        <span class="fa fa-lock form-control-feedback"></span>
        <?php echo form_error('password', '<div class="error" style="color: red;">', '</div>'); ?>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" equalTo="#password" placeholder="Enter New Password Again..." required name="password_confirm" />
        <span class="fa fa-lock form-control-feedback"></span>
        <?php echo form_error('password_confirm', '<div class="error" style="color: red;">', '</div>'); ?>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>

    <a href="<?php echo url('login') ?>"> <i class="fa fa-chevron-left"></i> Go To Login</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php include 'includes/footer.php' ?>
