<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
 include(VIEWPATH.'/errors/html/includes/header.php') ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0 !important;">
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page" style="margin-top: 150px;">
        <h2 class="headline text-yellow"> 404</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

          <p>
            We could not find the page you were looking for.
            Meanwhile, you may <a href="<?php echo config_item('base_url') ?>/">return to dashboard</a> or try using the search form.
          </p>
          
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include(VIEWPATH.'/errors/html/includes/footer.php') ?>
