<!-- Sidebar Menu -->
<nav class="mt-2">

<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


<li class="nav-item">
    <a href="<?php echo url('dashboard') ?>" class="nav-link <?php echo (@$_page->menu=='dashboard')?'active':'' ?>">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        <?php echo lang('App.dashboard') ?>
      </p>
    </a>
  </li>

  <?php if (hasPermissions('users_list')): ?>
    <li class="nav-item">
      <a href="<?php echo url('users') ?>" class="nav-link <?php echo (@$_page->menu=='users')?'active':'' ?>">
        <i class="nav-icon fas fa-user"></i>
        <p>
        <?php echo lang('App.users') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('activity_log_list')): ?>
    <li class="nav-item">
      <a href="<?php echo url('activityLogs') ?>" class="nav-link <?php echo (@$_page->menu=='activity_logs')?'active':'' ?>">
        <i class="nav-icon fas fa-history"></i>
        <p>
        <?php echo lang('App.activity_logs') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('roles_list')): ?>
    <li class="nav-item">
      <a href="<?php echo url('roles') ?>" class="nav-link <?php echo (@$_page->menu=='roles')?'active':'' ?>">
        <i class="nav-icon fas fa-lock"></i>
        <p>
        <?php echo lang('App.manage_roles') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if (hasPermissions('permissions_list')): ?>
    <li class="nav-item">
      <a href="<?php echo url('permissions') ?>" class="nav-link <?php echo (@$_page->menu=='permissions')?'active':'' ?>">
        <i class="nav-icon fas fa-user"></i>
        <p>
        <?php echo lang('App.manage_permissions') ?>
        </p>
      </a>
    </li>
  <?php endif ?>


  <?php if (hasPermissions('backup_db')): ?>
    <li class="nav-item">
      <a href="<?php echo url('backup') ?>" class="nav-link <?php echo (@$_page->menu=='backup')?'active':'' ?>">
        <i class="nav-icon fas fa-database"></i>
        <p>
        <?php echo lang('App.backup') ?>
        </p>
      </a>
    </li>
  <?php endif ?>

  <?php if ( hasPermissions('company_settings') ): ?>
  <li class="nav-item has-treeview <?php echo (@$_page->menu=='settings')?'menu-open':'' ?>">
    <a href="#" class="nav-link  <?php echo (@$_page->menu=='settings')?'active':'' ?>">
      <i class="nav-icon fas fa-cog"></i>
      <p>
      <?php echo lang('App.settings') ?>
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="<?php echo url('settings/general') ?>" class="nav-link <?php echo (@$_page->submenu=='general')?'active':'' ?>">
          <i class="far fa-circle nav-icon"></i> <p> <?php echo lang('App.general_setings') ?> </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo url('settings/company') ?>" class="nav-link <?php echo (@$_page->submenu=='company')?'active':'' ?>">
          <i class="far fa-circle nav-icon"></i> <p>  <?php echo lang('App.company_setings') ?> </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo url('settings/email_templates') ?>" class="nav-link <?php echo (@$_page->submenu=='email_templates')?'active':'' ?>">
          <i class="far fa-circle nav-icon"></i> <p> <?php echo lang('App.manage_email_template') ?></p>
        </a>
      </li>
    </ul>
  </li>
  <?php endif ?>
  
  <?php if(hasModule('adminlte')): ?>
    <?= $this->include("Adminlte\Views\aside-nav") ?>
  <?php endif; ?>

</ul>
</nav>
<!-- /.sidebar-menu -->