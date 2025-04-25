<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Default card -->
  <div class="card">

    <div class="card-header with-border">
      <h3 class="card-title"><?php echo lang('settings') ?></h3>
    </div>
    <ul class="list-group">
     
      <?php if (hasPermissions('general_settings')): ?>
        <a class="list-group-item list-group-item-action <?php echo ($page->submenu=='general')?'active':'' ?>" href="<?php echo url('settings/general') ?>"><?php echo lang('general_setings') ?></a>
      <?php endif ?>

      <?php if (hasPermissions('company_settings')): ?>
        <a class="list-group-item list-group-item-action <?php echo ($page->submenu=='company')?'active':'' ?>" href="<?php echo url('settings/company') ?>"><?php echo lang('company_setings') ?></a>
      <?php endif ?>
     
      <?php if (hasPermissions('email_templates')): ?>
        <a class="list-group-item list-group-item-action <?php echo ($page->submenu=='email_templates')?'active':'' ?>" href="<?php echo url('settings/email_templates') ?>"><?php echo lang('email_templates') ?></a>
      <?php endif ?>
      
    </ul>

  </div>