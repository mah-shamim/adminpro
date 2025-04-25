<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php include 'includes/header.php' ?>

<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo url('/') ?>"><?php echo setting('company_name') ?></a>
  </div>
  <?php if(isset($message)): ?>
      <div class="alert alert-<?php echo $message_type ?>">
        <p><?php echo $message ?></p>
      </div>
    <?php endif; ?>

    <?php if(!empty($this->session->flashdata('alert'))): ?>
      <div class="alert alert-<?php echo $this->session->flashdata('alert-type') ?>">
        <p><?php echo $this->session->flashdata('alert') ?></p>
      </div>
    <?php endif; ?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?php echo lang('message_how_forget_reset') ?></p>

    <?php echo form_open('/login/reset_password', ['method' => 'POST', 'autocomplete' => 'off']); ?> 
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="<?php echo lang('username_or_email') ?>" value="<?php echo !empty(post('username'))? post('username') : get('username')  ?>" name="username" autofocus />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        <?php echo form_error('username', '<span style="display:block" class="error invalid-feedback">', '</span>'); ?>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block"><?php echo lang('request_password') ?></button>
          </div>
          <!-- /.col -->
        </div>
    <?php echo form_close(); ?>

      <p class="mt-3 mb-1">
        <a href="<?php echo url('login') ?>"><?php echo lang('signin') ?></a>
      </p>
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<?php include 'includes/footer.php' ?>
