<?= $this->extend('admin/auth/layout') ?>
<?= $this->section('content') ?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?php echo form_open('auth/login/check', ['method' => 'POST', 'autocomplete' => 'off', 'id' => 'quickForm']); ?> 
        <?= csrf_field() ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" required name="username" value="admin" placeholder="<?php echo lang('App.username_or_email') ?>"  value="<?php echo old('username') ?>" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          <?= form_error('username') ?>
        </div>
        
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" value="admin123" name="password" required placeholder="<?php echo lang('App.user_password') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <?= form_error('password') ?>
        </div>
        <?php if (setting('google_recaptcha_enabled') == '1'): ?>
          <script src="https://www.google.com/recaptcha/api.js" async defer></script>
          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="<?php echo setting('google_recaptcha_sitekey') ?>"></div>
            <?php echo form_error('g-recaptcha-response', '<span style="display:block" class="error invalid-feedback">', '</span>'); ?>
          </div>
        <?php endif ?>
        <div class="row">
          <div class="col-8">
            <div class="icheck-danger">
              <input type="checkbox" id="remember" name="remember_me" checked <?php echo post('remember_me')?'checked':'' ?> />
              <label for="remember"> <?php echo lang('App.remember_me') ?>
              </label>
            </div>
              <?= form_error('remember_me') ?>
          </div>
          <!-- /.col -->

          

          <div class="col-4">
            <button type="submit" class="btn btn-danger btn-block"><?php echo lang('App.signin') ?></button>
          </div>
          <!-- /.col -->
        </div>
        <?php echo form_close(); ?>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="<?php echo url('auth/forgetPassword?username='.post('username')) ?>" class="text-muted"><?php echo lang('App.forget_password_?') ?></a>
      </p>
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>

<?=  $this->endSection() ?>
