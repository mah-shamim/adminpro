<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $heading ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/toastr/toastr.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/summernote/summernote-bs4.css">
  
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/select2/css/select2.min.css" />

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/css/adminlte.min.css">

  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo config_item('base_url') ?>/assets/css/app.css">

  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

  
<!-- jQuery -->
<script src="<?php echo config_item('base_url') ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo config_item('base_url') ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo config_item('base_url') ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body class="hold-transition skin-custom">
<!-- Site wrapper -->
<div class="wrapper">

