<?php function alertHTML($msg, $type, $timeout = 5000){ 
    $time = time();  ?>

	<section style="padding: 15px;">
		<div class="alert alert-<?= $type ?>" id="alert-<?= $time ?>">
			<?= $msg ?>
		</div>
	</section>
    
    <?php if($timeout) : ?>
	<script>
		setTimeout(function() {
			$('#alert-<?= $time ?>').hide().remove();
		}, <?= $timeout ?>)
	</script>
    <?php endif ?>
	
<?php } ?>

<?php  if($msg = session()->getFlashdata('alertSuccess')) echo alertHTML($msg, 'success');  ?>

<?php  if($msg = session()->getFlashdata('alertWarning')) echo alertHTML($msg, 'warning');  ?>

<?php  if($msg = session()->getFlashdata('alertError')) echo alertHTML($msg, 'danger');  ?>

<?php  if($msg = session()->getFlashdata('alertInfo')) echo alertHTML($msg, 'info');  ?>

<?php  if($msg = session()->getFlashdata('alert')) echo alertHTML($msg, 'default');  ?>


<?= $this->section('js') ?>
<script>

    (function(){
        
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        
        <?php if(isset($successMsg)):  ?>
            toastr.success("<?= $successMsg ?>");
        <?php endif ?>
        <?php if(isset($errorMsg)):  ?>
            toastr.error("<?= $errorMsg ?>");
        <?php endif ?>
        
        <?php if(session()->getFlashdata('notifySuccess')):  ?>
            toastr.success("<?= session()->getFlashdata('notifySuccess') ?>");
        <?php endif ?>

        <?php if(session()->getFlashdata('notifyError')):  ?>
            toastr.error("<?= session()->getFlashdata('notifyError') ?>");
        <?php endif ?>
        
    })();
</script>
<?=  $this->endSection() ?>
