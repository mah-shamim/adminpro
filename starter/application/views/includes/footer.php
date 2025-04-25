<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


</div>
<!-- ./wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
    Made with <i class="fa fa-heart" style="color: red;"></i> for Developers
      &nbsp; &nbsp; &nbsp; &nbsp; 
      <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="<?php echo url('/') ?>"><?php echo setting('company_name') ?></a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



<!-- ChartJS -->
<script src="<?php echo $url->assets ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $url->assets ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo $url->assets ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $url->assets ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $url->assets ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $url->assets ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $url->assets ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo $url->assets ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- SweetAlert2 -->
<script src="<?php echo $url->assets ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo $url->assets ?>plugins/toastr/toastr.min.js"></script>

<!-- DataTables -->
<script src="<?php echo $url->assets ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- jquery-validation -->
<script src="<?php echo $url->assets ?>plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/jquery-validation/additional-methods.min.js"></script>

<!-- Bootstrap Switch -->
<script src="<?php echo $url->assets ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

<!-- Select2 -->
<script src="<?php echo $url->assets ?>plugins/select2/js/select2.full.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo $url->assets ?>js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo $url->assets ?>js/demo.js"></script>

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

</body>
</html>


