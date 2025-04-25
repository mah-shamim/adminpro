<?= $this->extend('admin/layout/default') ?>
<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1><?php echo lang('App.modules') ?></h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('App.home') ?></a></li>
            <li class="breadcrumb-item active"><?php echo lang('App.modules') ?></li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3"><?php echo lang('App.modules') ?></h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              
              <?php if(is_writable( ROOTPATH.'Modules' )): ?>
                <div class="alert alert-warning">
                  Modules directory is not writable.
                </div>
              <?php endif ?>

                <table id="example1" class="table table-bordered table-hover table-striped">
                  <thead>
                  <tr>
                    <th><?php echo lang('App.name') ?></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach (modules() as $row): ?>
                    <tr>
                      <td>
                        <?php echo $row ?>
                      </td>
                    </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->



    <?= $this->endSection() ?>
