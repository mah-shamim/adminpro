</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Made with <i class="fa fa-heart" style="color: red;"></i> for Developers
      &nbsp; &nbsp; &nbsp; &nbsp; 
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="<?php echo url('/') ?>"><?php echo setting('company_name') ?></a>.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- date-range-picker -->
<script src="<?php echo $url->assets ?>plugins/moment/min/moment.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- bootstrap datepicker -->
<script src="<?php echo $url->assets ?>plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- DataTables -->
<script src="<?php echo $url->assets ?>plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?php echo $url->assets ?>plugins/datatables.net/export/dataTables.buttons.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/datatables.net/export/buttons.bootstrap.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/datatables.net/export/jszip.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/datatables.net/export/pdfmake.min.js"></script>
<script src="<?php echo $url->assets ?>plugins/datatables.net/export/vfs_fonts.js"></script>
<script src="<?php echo $url->assets ?>plugins/datatables.net/export/buttons.html5.min.js"></script>

<!-- Validate  -->
<script src="<?php echo $url->assets ?>plugins/jquery.validate.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo $url->assets ?>js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $url->assets ?>js/demo.js"></script>

<!-- Select2 -->
<script src="<?php echo $url->assets ?>plugins/select2/dist/js/select2.full.min.js"></script>

<!-- pace -->
<script src="<?php echo $url->assets ?>plugins/pace/pace.min.js"></script>

<!-- Validate  -->
<script src="<?php echo $url->assets ?>plugins/switchery/switchery.min.js"></script>


<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })

  $.validator.setDefaults( {
    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `help-block` class to the error element
      error.addClass( "help-block" );

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.parent( "label" ) );
      } else {
        error.insertAfter( element );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).parents( ".form-group" ).addClass( "has-error" ).removeClass( "has-success" );
    },
    unhighlight: function (element, errorClass, validClass) {
      $( element ).parents( ".form-group" ).addClass( "has-success" ).removeClass( "has-error" );
    }
} );

$.fn.openMenu = function () {
        var className = $(this).attr('class');
  if(className == "treeview"){
    $(this).addClass("active");
  }else if(className == "treeview-menu" ){
    $(this).addClass("menu-open");
    $(this).css({ display: "block" });
  }
};

$.fn.closeMenu = function () {
        var className = $(this).attr('class');
  var count = $(this).length;
  if(count > 1){
    $.each($(this), function( key, element ) {
      className = $(element).attr('class');
      if(className == "treeview active"){
        $(element).removeClass("active");
      }else if(className == "treeview-menu menu-open" ){
        $(element).removeClass("menu-open");
        $(element).css({ display: "none" });
      }
    });
  }else{
    if(className == "treeview active"){
      $(this).removeClass("active");
    }else if(className == "treeview-menu menu-open" ){
      $(this).removeClass("menu-open");
      $(this).css({ display: "none" });
    }
  }
};

$(".search-menu-box").on('input', function() {
    var filter = $(this).val();
    $(".sidebar-menu > li").each(function(){
        if ($(this).text().search(new RegExp(filter, "i")) < 0) {
            $(this).hide();
        } else {
            $(this).show();
            $(this).parentsUntil(".treeview").openMenu();
        }
    });
});

/**
 * Datables with Export Buttons
 *
 * **Remove this code if you dont want export buttons**
 */
$.extend( $.fn.dataTable.defaults, {
    "dom": "<'row'<'col-sm-3 text-left'l><'col-sm-3 text-center'f><'col-sm-6 text-right'B>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-12'p<br/>i>>",
    buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
    ]
} );


</script>
</body>
</html>
