
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= setting('company_name') ?> | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= admin_assets() ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= admin_assets() ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= admin_assets() ?>/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    
<div class="login-box">
  <div class="login-logo">
    <a href="<?= url('/') ?>"><?php echo setting('company_name') ?></a>
  </div>

  <?= $this->include('admin/layout/partials/notification') ?>


    <?= $this->renderSection("content") ?>
  
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= admin_assets() ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= admin_assets() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= admin_assets() ?>/js/adminlte.min.js"></script>

<!-- jquery-validation -->
<script src="<?= admin_assets() ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= admin_assets() ?>/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
  $('#quickForm').validate();
});
</script>
</body>
</html>
