<?= $this->extend('admin/auth/layout') ?>
<?= $this->section('content') ?>

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?php echo lang('App.mesasge_set_password_step') ?></p>

      <?php echo form_open('/auth/forgetPassword/DoSetPassword', ['method' => 'POST', 'autocomplete' => 'off']); ?> 
    	<input type="hidden" name="token" value="<?php echo $user->reset_token ?>" />
        <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="<?php echo lang('App.new_password') ?>" name="password" required autofocus id="password" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <?php echo form_error('password', '<span style="display:block" class="error invalid-feedback">', '</div>'); ?>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" equalTo="#password" placeholder="<?php echo lang('App.confirm_new_password') ?>" required name="password_confirm" />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <?php echo form_error('password_confirm', '<span style="display:block" class="error invalid-feedback">', '</div>'); ?>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block"><?php echo lang('App.update_password') ?></button>
          </div>
          <!-- /.col -->
        </div>
     <?php echo form_close(); ?>

      <p class="mt-3 mb-1">
        <a href="<?php echo url('login') ?>"><?php echo lang('App.signin') ?></a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>

<?=  $this->endSection() ?>
