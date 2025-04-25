<?php include viewPath('includes/header'); ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page" style="margin-top: 150px;">
        <h2 class="headline text-info pt-4 pr-3"> 403</h2>

        <div class="error-content">
          <h3  class="py-3"><i class="fa fa-warning text-info"></i> <?php echo lang('not_allowed_403') ?></h3>

          <p>
            <?php echo lang('sorry_not_allowed_msg', '') ?>
          </p>

        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include viewPath('includes/footer'); ?>
