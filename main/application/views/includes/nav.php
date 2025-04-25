<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">


<li class="nav-item">
    <a href="<?php echo url('dashboard') ?>" class="nav-link <?php echo ($page->menu=='dashboard')?'active':'' ?>">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        <?php echo lang('dashboard') ?>
      </p>
    </a>
  </li>

  <?php if (hasPermissions('users_list')): ?>
    <li class="nav-item">
      <a href="<?php echo url('users') ?>" class="nav-link <?php echo ($page->menu=='users')?'active':'' ?>">
        <i class="nav-icon fas fa-user"></i>
        <p>
        <?php echo lang('users') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('activity_log_list')): ?>
    <li class="nav-item">
      <a href="<?php echo url('activity_logs') ?>" class="nav-link <?php echo ($page->menu=='activity_logs')?'active':'' ?>">
        <i class="nav-icon fas fa-history"></i>
        <p>
        <?php echo lang('activity_logs') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('roles_list')): ?>
    <li class="nav-item">
      <a href="<?php echo url('roles') ?>" class="nav-link <?php echo ($page->menu=='roles')?'active':'' ?>">
        <i class="nav-icon fas fa-lock"></i>
        <p>
        <?php echo lang('manage_roles') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('permissions_list')): ?>
    <li class="nav-item">
      <a href="<?php echo url('permissions') ?>" class="nav-link <?php echo ($page->menu=='permissions')?'active':'' ?>">
        <i class="nav-icon fas fa-user"></i>
        <p>
        <?php echo lang('manage_permissions') ?>
        </p>
      </a>
    </li>
  <?php endif ?>


  <?php if (hasPermissions('backup_db')): ?>
    <li class="nav-item">
      <a href="<?php echo url('backup') ?>" class="nav-link <?php echo ($page->menu=='backup')?'active':'' ?>">
        <i class="nav-icon fas fa-user"></i>
        <p>
        <?php echo lang('backup') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if ( hasPermissions('company_settings') ): ?>
  <li class="nav-item has-treeview <?php echo ($page->menu=='settings')?'menu-open':'' ?>">
    <a href="#" class="nav-link  <?php echo ($page->menu=='settings')?'active':'' ?>">
      <i class="nav-icon fas fa-cog"></i>
      <p>
      <?php echo lang('settings') ?>
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="<?php echo url('settings/general') ?>" class="nav-link <?php echo ($page->submenu=='general')?'active':'' ?>">
          <i class="far fa-circle nav-icon"></i> <p> <?php echo lang('general_setings') ?> </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo url('settings/company') ?>" class="nav-link <?php echo ($page->submenu=='company')?'active':'' ?>">
          <i class="far fa-circle nav-icon"></i> <p>  <?php echo lang('company_setings') ?> </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo url('settings/email_templates') ?>" class="nav-link <?php echo ($page->submenu=='email_templates')?'active':'' ?>">
          <i class="far fa-circle nav-icon"></i> <p> <?php echo lang('manage_email_template') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <?php endif ?>


  <li class="nav-header"><strong>  <?php echo lang('ci_examples') ?>  </strong> &nbsp;
  <span class="right badge badge-primary">New</span>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
      <?php echo lang('datatables') ?>
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ci_examples/basic_datatables') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('basic_datatables') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ci_examples/serverside_datatables') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('serverside_datatables') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/ci_examples/form_validation') ?>" class="nav-link">
      <i class="nav-icon fas fa-table"></i>
      <p>
      <?php echo lang('form_validation') ?>
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/ci_examples/file_uploads') ?>" class="nav-link">
      <i class="nav-icon fas fa-upload"></i>
      <p>
      <?php echo lang('file_upload') ?>
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/ci_examples/multi_file_uploads') ?>" class="nav-link">
      <i class="nav-icon fas fa-file-upload"></i>
      <p>
      <?php echo lang('multi_file_upload') ?>
      </p>
    </a>
  </li>

  <li class="nav-header"><strong> AdminLTE 3 Pages</strong></li>
  <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        <?php echo lang('dashboard') ?>
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/main/dashboard') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('dashboard') ?> v1</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/main/dashboard2') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('dashboard') ?> v2</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/main/dashboard3') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('dashboard') ?> v3</p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/main/widgets') ?>" class="nav-link">
      <i class="nav-icon fas fa-th"></i>
      <p>
      <?php echo lang('widgets') ?>
      </p>
    </a>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>
      <?php echo lang('layout_options') ?>
        <i class="fas fa-angle-left right"></i>
        <span class="badge badge-info right">6</span>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/top_nav') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('top_navigation') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/top_nav_sidebar') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('top_navigation_sidebar') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/boxed') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('boxed') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/fixed_sidebar') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('fixed_sidebar') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/fixed_topnav') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('fixed_navbar') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/fixed_footer') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('fixed_footer') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/collapsed_sidebar') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('collapsed_sidebar') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-chart-pie"></i>
      <p>
      <?php echo lang('charts') ?>
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/charts/chartjs'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('chartjs') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/charts/flot'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('flot') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/charts/inline'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('inline') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tree"></i>
      <p>
      <?php echo lang('ui_elements') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/Ui/general'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('general') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/Ui/icons'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('icons') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/Ui/buttons'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('buttons') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/Ui/sliders'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('sliders') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/Ui/modals'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('modals_alerts') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/Ui/navbar'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('nav_tabs') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/Ui/timeline'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('timeline') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/Ui/ribbons'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('ribbons') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-edit"></i>
      <p>
      <?php echo lang('forms') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/forms/general'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('general_elements') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/forms/advanced'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('advanced_elements') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/forms/editors'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('editors') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/forms/validation'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('validation') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-table"></i>
      <p>
      <?php echo lang('tables') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/tables/simple'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('simple_tables') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/tables/data'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('datatables') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/tables/jsgrid'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('jsgrid') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-header"><?php echo lang('examples') ?></li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/main/calendar'); ?>" class="nav-link">
      <i class="nav-icon far fa-calendar-alt"></i>
      <p>
      <?php echo lang('calendar') ?>
        <span class="badge badge-info right">2</span>
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/main/gallery'); ?>" class="nav-link">
      <i class="nav-icon far fa-image"></i>
      <p>
      <?php echo lang('gallery') ?>
      </p>
    </a>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon far fa-envelope"></i>
      <p>
      <?php echo lang('mailbox') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/mailbox/mailbox'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('inbox') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/mailbox/compose'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('compose') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/mailbox/read_mail'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('read') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-book"></i>
      <p>
      <?php echo lang('pages') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/invoice'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('invoice') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/profile'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('profile') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/e-commerce'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('ecommerce') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/projects'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('projects') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/project_add'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('project_add') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/project_edit'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('project_edit') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/project_detail'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('project_detail') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/contacts'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('contacts') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon far fa-plus-square"></i>
      <p>
      <?php echo lang('extras') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/login'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('extras') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/register'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('register') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/forgot_password'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('forgot_password') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/recover_password'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('recover_password') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/lockscreen'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('lockscreen') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/legacy_user_menu'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('legacy_user_menu') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/language_menu'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('legacy_user_menu') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/error404'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('error_404') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/error500'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('error_500') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/pace'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('pace') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/blank'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('blank_page') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/starter'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('starter_page') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-header"><?php echo lang('MISCELLANEOUS') ?></li>
  <li class="nav-item">
    <a href="https://adminlte.io/docs/3.0" class="nav-link">
      <i class="nav-icon fas fa-file"></i>
      <p><?php echo lang('documentation') ?></p>
    </a>
  </li>
  <li class="nav-header"><?php echo lang('multi_level_example') ?></li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="fas fa-circle nav-icon"></i>
      <p><?php echo lang('level') ?> 1</p>
    </a>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-circle"></i>
      <p>
        <?php echo lang('level') ?> 1
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('level') ?> 2</p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>
            <?php echo lang('level') ?> 2
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p><?php echo lang('level') ?> 3</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p><?php echo lang('level') ?> 3</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p><?php echo lang('level') ?> 3</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('level') ?> 2</p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="fas fa-circle nav-icon"></i>
      <p><?php echo lang('level') ?> 1</p>
    </a>
  </li>
  <li class="nav-header"><?php echo lang('labels') ?></li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon far fa-circle text-danger"></i>
      <p class="text"><?php echo lang('important') ?></p>
    </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon far fa-circle text-warning"></i>
      <p><?php echo lang('warning') ?></p>
    </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon far fa-circle text-info"></i>
      <p><?php echo lang('informational') ?></p>
    </a>
  </li>

</ul>