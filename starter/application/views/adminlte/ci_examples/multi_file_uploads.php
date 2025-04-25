<?php include viewPath('includes/header'); ?>

<!-- <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/jquery.fileupload.js"></script> -->

<link rel="stylesheet" href="<?php echo $url->assets ?>plugins/jquery-file-upload/css/jquery.fileupload.css" />
    <link rel="stylesheet" href="<?php echo $url->assets ?>plugins/jquery-file-upload/css/jquery.fileupload-ui.css" />

    <style>#dropzone {
    background: white;
    width: 100%;
    height: 200px;
    line-height: 200px;
    text-align: center;
    font-weight: bold;
    border: 1px dashed rgb(0 0 0 / 30%);
    margin: 20px 10px;
    cursor: pointer;
    color: #999;
    font-size: 1.2rem;
    font-weight: normal;
}
#dropzone.in {
    width: 100%;
    height: 200px;
    line-height: 200px;
    font-size: larger;
}
#dropzone.hover {
    background: #eee;
}
#dropzone.fade {
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    opacity: 1;
}</style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>File Upload</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Multipe File Uploads Example</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Multipe File Uploads Example <small>(with server-side)</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <?php echo form_open('adminlte/ci_examples/multi_file_uploads', [ 'id' => 'fileupload', 'enctype' => 'multipart/form-data' ])  ?>
              <!-- <form role="form" id="quickForm"> -->
                <div class="card-body">

                  <div id="dropzone" onclick="$('.fileinput-button input').click();" class="fade well">drag and drop files here</div>
                  <br>

                  <!-- The table listing the files available for upload/download -->
                  <table role="presentation" class="table table-striped">
                    <tbody class="files"></tbody>
                  </table>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                <div class="row fileupload-buttonbar">
                  <div class="col-lg-12">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    <span class="btn btn-success fileinput-button">
                      <i class="fa fa-plus"></i> &nbsp;&nbsp;
                      <span>Add files...</span>
                      <input type="file" name="files" multiple />
                    </span>
                    <button type="submit" class="btn btn-primary start">
                      <i class="fa fa-upload"></i> &nbsp;&nbsp;
                      <span>Start upload</span>
                    </button>
                    <button type="reset" class="btn btn-warning cancel">
                      <i class="fa fa-times"></i> &nbsp;&nbsp;
                      <span>Cancel upload</span>
                    </button>
                    <button type="button" class="btn btn-danger delete">
                      <i class="fa fa-trash"></i> &nbsp;&nbsp;
                      <span>Delete selected</span>
                    </button>
                    <input type="checkbox" class="toggle" />
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                  </div>
                </div>
                  
                  
                </div>
                <?php echo form_close()  ?>

            </div>
            <!-- /.card -->

            

            </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php include viewPath('includes/footer'); ?>
    
    <!-- jquery-validation -->
    <script src="<?php echo $url->assets ?>plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo $url->assets ?>plugins/jquery-validation/additional-methods.min.js"></script>

    <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/vendor/doka.polyfill.loader.js"></script>
    <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/vendor/doka.min.js"></script>
    
    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>

    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>

    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>

    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>

    <!-- blueimp Gallery script -->
    <script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>

    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
    <!-- The File Upload processing plugin -->
    <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
    <!-- The File Upload video preview plugin -->
    <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
    <!-- The File Upload validation plugin -->
    <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
    <!-- The File Upload user interface plugin -->
    <script src="<?php echo $url->assets ?>plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>

<script type="text/javascript">

$(function () {
  'use strict';

      // Initialize the jQuery File Upload widget:
      $('#fileupload').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: $('#fileupload').attr('action'),
        dropZone: $('#dropzone')
      });
      
      $(document).bind('dragover', function (e) {
        var dropZones = $('#dropzone'),
            timeout = window.dropZoneTimeout;
        if (timeout) {
            clearTimeout(timeout);
        } else {
            dropZones.addClass('in');
        }
        var hoveredDropZone = $(e.target).closest(dropZones);
        dropZones.not(hoveredDropZone).removeClass('hover');
        hoveredDropZone.addClass('hover');
        window.dropZoneTimeout = setTimeout(function () {
            window.dropZoneTimeout = null;
            dropZones.removeClass('in hover');
        }, 100);
    });
  
    // Load existing files:
    $('#fileupload').addClass('fileupload-processing');
    $.ajax({
      // Uncomment the following to send cross-domain cookies:
      //xhrFields: {withCredentials: true},
      url:  "<?php echo url('/adminlte/ci_examples/multi_file_uploads_files') ?>",
      dataType: 'json',
      context: $('#fileupload')[0]
    })
      .always(function () {
        $(this).removeClass('fileupload-processing');
      })
      .done(function (result) {
        $(this)
          .fileupload('option', 'done')
          // eslint-disable-next-line new-cap
          .call(this, $.Event('done'), { result: result });
      });
      
});
</script>


    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <tr class="template-upload {%=o.options.loadImageFileTypes.test(file.type)?' image':''%}">
              <td>
                  <span class="preview"></span>
              </td>
              <td>
                  <p class="name">{%=file.name%}</p>
                  <strong class="error text-danger"></strong>
              </td>
              <td>
                  <p class="size">Processing...</p>
                  <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
              </td>
              <td>
                  {% if (!o.options.autoUpload && o.options.edit && o.options.loadImageFileTypes.test(file.type)) { %}
                    <button class="btn btn-success edit" data-index="{%=i%}" disabled>
                        <i class="fa fa-edit"></i>
                        <span>Edit</span>
                    </button>
                  {% } %}
                  {% if (!i && !o.options.autoUpload) { %}
                      <button class="btn btn-primary start" disabled>
                          <i class="fa fa-upload"></i>
                          <span>Start</span>
                      </button>
                  {% } %}
                  {% if (!i) { %}
                      <button class="btn btn-warning cancel">
                          <i class="fa fa-ban-circle"></i>
                          <span>Cancel</span>
                      </button>
                  {% } %}
              </td>
          </tr>
      {% } %}
    </script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
      {% for (var i=0, file; file=o.files[i]; i++) { %}
          <tr class="template-download {%=file.thumbnailUrl?' image':''%}">
              <td>
                  <span class="preview">
                      {% if (file.thumbnailUrl) { %}
                          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}" width="100"></a>
                      {% } %}
                  </span>
              </td>
              <td>
                  <p class="name">
                      {% if (file.url) { %}
                          <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                      {% } else { %}
                          <span>{%=file.name%}</span>
                      {% } %}
                  </p>
                  {% if (file.error) { %}
                      <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                  {% } %}
              </td>
              <td>
                  <span class="size">{%=o.formatFileSize(file.size)%}</span>
              </td>
              <td>
                  {% if (file.deleteUrl) { %}
                      <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>Delete</span>
                      </button>
                      <input type="checkbox" name="delete" value="1" class="toggle">
                  {% } else { %}
                      <button class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>Cancel</span>
                      </button>
                  {% } %}
              </td>
          </tr>
      {% } %}
    </script>