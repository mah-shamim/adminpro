
  <li class="nav-header"><strong>  <?php echo lang('App.ci_examples') ?>  </strong> &nbsp;
  <span class="right badge badge-primary">New</span>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
      <?php echo lang('App.datatables') ?>
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ci_examples/basic_datatables') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.basic_datatables') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ci_examples/serverside_datatables') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.serverside_datatables') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/ci_examples/form_validation') ?>" class="nav-link">
      <i class="nav-icon fas fa-table"></i>
      <p>
      <?php echo lang('App.form_validation') ?>
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/ci_examples/file_uploads') ?>" class="nav-link">
      <i class="nav-icon fas fa-upload"></i>
      <p>
      <?php echo lang('App.file_upload') ?>
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/ci_examples/multi_file_uploads') ?>" class="nav-link">
      <i class="nav-icon fas fa-file-upload"></i>
      <p>
      <?php echo lang('App.multi_file_upload') ?>
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
        <?php echo lang('App.dashboard') ?>
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/main/dashboard') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.dashboard') ?> v1</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/main/dashboard2') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.dashboard') ?> v2</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/main/dashboard3') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.dashboard') ?> v3</p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/main/widgets') ?>" class="nav-link">
      <i class="nav-icon fas fa-th"></i>
      <p>
      <?php echo lang('App.widgets') ?>
      </p>
    </a>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-copy"></i>
      <p>
      <?php echo lang('App.layout_options') ?>
        <i class="fas fa-angle-left right"></i>
        <span class="badge badge-info right">6</span>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/top_nav') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.top_navigation') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/top_nav_sidebar') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.top_navigation_sidebar') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/boxed') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.boxed') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/fixed_sidebar') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.fixed_sidebar') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/fixed_topnav') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.fixed_navbar') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/fixed_footer') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.fixed_footer') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/layout/collapsed_sidebar') ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.collapsed_sidebar') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-chart-pie"></i>
      <p>
      <?php echo lang('App.charts') ?>
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/charts/chartjs'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.chartjs') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/charts/flot'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.flot') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/charts/inline'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.inline') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-tree"></i>
      <p>
      <?php echo lang('App.ui_elements') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ui/general'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.general') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ui/icons'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.icons') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ui/buttons'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.buttons') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ui/sliders'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.sliders') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ui/modals'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.modals_alerts') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ui/navbar'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.nav_tabs') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ui/timeline'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.timeline') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/ui/ribbons'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.ribbons') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-edit"></i>
      <p>
      <?php echo lang('App.forms') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/forms/general'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.general_elements') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/forms/advanced'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.advanced_elements') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/forms/editors'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.editors') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/forms/validation'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.validation') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-table"></i>
      <p>
      <?php echo lang('App.tables') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/tables/simple'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.simple_tables') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/tables/data'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.datatables') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/tables/jsgrid'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.jsgrid') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-header"><?php echo lang('App.examples') ?></li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/main/calendar'); ?>" class="nav-link">
      <i class="nav-icon far fa-calendar-alt"></i>
      <p>
      <?php echo lang('App.calendar') ?>
        <span class="badge badge-info right">2</span>
      </p>
    </a>
  </li>
  <li class="nav-item">
    <a href="<?php echo url('adminlte/main/gallery'); ?>" class="nav-link">
      <i class="nav-icon far fa-image"></i>
      <p>
      <?php echo lang('App.gallery') ?>
      </p>
    </a>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon far fa-envelope"></i>
      <p>
      <?php echo lang('App.mailbox') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/mailbox/mailbox'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.inbox') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/mailbox/compose'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.compose') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/mailbox/read_mail'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.read') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-book"></i>
      <p>
      <?php echo lang('App.pages') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/invoice'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.invoice') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/profile'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.profile') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/e-commerce'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.ecommerce') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/projects'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.projects') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/project_add'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.project_add') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/project_edit'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.project_edit') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/project_detail'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.project_detail') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/contacts'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.contacts') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon far fa-plus-square"></i>
      <p>
      <?php echo lang('App.extras') ?>
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/login'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.extras') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/register'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.register') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/forgot_password'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.forgot_password') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/recover_password'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.recover_password') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/lockscreen'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.lockscreen') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/legacy_user_menu'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.legacy_user_menu') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/language_menu'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.legacy_user_menu') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/404'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.error_404') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/500'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.error_500') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/pace'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.pace') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/blank'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.blank_page') ?></p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo url('adminlte/examples/starter'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.starter_page') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-header"><?php echo lang('App.MISCELLANEOUS') ?></li>
  <li class="nav-item">
    <a href="https://adminlte.io/docs/3.0" class="nav-link">
      <i class="nav-icon fas fa-file"></i>
      <p><?php echo lang('App.documentation') ?></p>
    </a>
  </li>
  <li class="nav-header"><?php echo lang('App.multi_level_example') ?></li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="fas fa-circle nav-icon"></i>
      <p><?php echo lang('App.level') ?> 1</p>
    </a>
  </li>
  <li class="nav-item has-treeview">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-circle"></i>
      <p>
        <?php echo lang('App.level') ?> 1
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.level') ?> 2</p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>
            <?php echo lang('App.level') ?> 2
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p><?php echo lang('App.level') ?> 3</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p><?php echo lang('App.level') ?> 3</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-dot-circle nav-icon"></i>
              <p><?php echo lang('App.level') ?> 3</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p><?php echo lang('App.level') ?> 2</p>
        </a>
      </li>
    </ul>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="fas fa-circle nav-icon"></i>
      <p><?php echo lang('App.level') ?> 1</p>
    </a>
  </li>
  <li class="nav-header"><?php echo lang('App.labels') ?></li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon far fa-circle text-danger"></i>
      <p class="text"><?php echo lang('App.important') ?></p>
    </a>
  </li>
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon far fa-circle text-warning"></i>
      <p><?php echo lang('App.warning') ?></p>
    </a>
  </li>
  
  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon far fa-circle text-info"></i>
      <p><?php echo lang('App.informational') ?></p>
    </a>
  </li>
