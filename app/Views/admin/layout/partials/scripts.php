<!-- daterangepicker -->
<script src="<?php echo assets_url('admin') ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo assets_url('admin') ?>/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Summernote -->
<script src="<?php echo assets_url('admin') ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo assets_url('admin') ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- SweetAlert2 -->
<script src="<?php echo assets_url('admin') ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo assets_url('admin') ?>/plugins/toastr/toastr.min.js"></script>

<!-- DataTables -->
<script src="<?php echo assets_url('admin') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo assets_url('admin') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo assets_url('admin') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo assets_url('admin') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- jquery-validation -->
<script src="<?php echo assets_url('admin') ?>/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo assets_url('admin') ?>/plugins/jquery-validation/additional-methods.min.js"></script>

<!-- Bootstrap Switch -->
<script src="<?php echo assets_url('admin') ?>/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<!-- Select2 -->
<script src="<?php echo assets_url('admin') ?>/plugins/select2/js/select2.full.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo assets_url('admin') ?>/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo assets_url('admin') ?>/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

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

  });
</script>
<!-- Page Script -->
<?php $this->renderSection('js') ?>