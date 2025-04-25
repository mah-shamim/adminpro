<?php include viewPath('includes/header'); ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Basic DataTables</li>
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
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Last Login</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Last Login</th>
                  </tr>
                  </tfoot>
                </table>

                 <br>
                 <br>
                 <br>
                 <br>
                 <?php // echo $this->datatables->generate('dt_authors'); $this->datatables->jquery('dt_authors') ?>

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
    <?php include viewPath('includes/footer'); ?>

<!-- page script -->
<script>
  $(function () {
    $("#example2").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            "url": "<?php echo url('adminlte/ci_examples/serverside_datatables_data') ?>",
            "type": "POST",
            "data": {
              "<?php echo $this->security->get_csrf_token_name(); ?>" : $('meta[name=csrf_token_hash]').attr('content')
            }
        },
        columns: [
            { data: "name" },
            {data : "email"},
            {data : "last_login"},
        ]
    });
  });
</script>
