<?= $this->extend('admin/auth/layout') ?>
<?= $this->section('content') ?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?= form_open('/auth/forgetPassword/reset', ['method' => 'POST', 'autocomplete' => 'off']); ?> 
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="<?= lang('App.username_or_email') ?>" value="<?= !empty(post('username'))? post('username') : get('username')  ?>" name="username" autofocus />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        <?= form_error('username'); ?>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block"><?= lang('App.request_password') ?></button>
          </div>
          <!-- /.col -->
        </div>
    <?= form_close(); ?>

      <p class="mt-3 mb-1">
        <a href="<?= url('auth/login') ?>"><?= lang('App.signin') ?></a>
      </p>

    </div>
    <!-- /.login-card-body -->
  </div>

<?=  $this->endSection() ?>
