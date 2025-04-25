#
# TABLE STRUCTURE FOR: activity_logs
#

DROP TABLE IF EXISTS `activity_logs`;

CREATE TABLE `activity_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `user` text NOT NULL,
  `ip_address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (1, 'Administrator (admin) Logged in', '1', '::1', '2021-02-24 17:19:31', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (2, 'Administrator (admin) Logged in', '1', '::1', '2021-02-25 18:12:39', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (3, 'User: Administrator Logged Out', '1', '::1', '2021-02-25 18:46:14', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (4, 'Administrator (admin) Logged in', '1', '::1', '2021-02-25 18:47:10', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (5, 'User: Administrator Logged Out', '1', '::1', '2021-02-25 18:49:31', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (6, 'Administrator (admin) Logged in', '1', '::1', '2021-02-25 18:52:38', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (7, 'User: Administrator Logged Out', '1', '::1', '2021-02-25 18:56:09', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (8, 'Administrator (admin) Logged in', '1', '::1', '2021-02-25 19:06:46', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (9, 'Administrator (admin) Logged in', '1', '::1', '2021-02-27 18:14:23', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (10, 'Administrator (admin) Logged in', '1', '::1', '2021-02-27 19:31:15', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (11, 'Administrator (admin) Logged in', '1', '::1', '2021-03-03 17:33:19', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (12, 'User: Administrator Logged Out', '1', '::1', '2021-03-03 17:35:10', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (13, 'Administrator (admin) Logged in', '1', '::1', '2021-03-03 17:35:20', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (14, 'User #1 Updated by User:Administrator', '1', '::1', '2021-03-03 19:13:11', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (15, 'User #1 Updated by User:Administrator', '1', '::1', '2021-03-03 19:13:15', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (16, 'New User $2 Created by User:Administrator', '1', '::1', '2021-03-03 19:26:21', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (17, 'New User $3 Created by User:Administrator', '1', '::1', '2021-03-03 19:29:11', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (18, 'User #3 Updated by User:Administrator', '1', '::1', '2021-03-03 19:30:31', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (19, 'New User $4 Created by User:Administrator', '1', '::1', '2021-03-03 19:33:49', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (20, 'User #1 Deleted by User:Administrator', '1', '::1', '2021-03-03 19:33:55', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (21, 'Role #1 Updated by User: #1', '1', '::1', '2021-03-03 19:55:00', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (22, 'Role #2 Updated by User: #1', '1', '::1', '2021-03-03 19:55:29', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (23, 'New Role #3 Created by User: #1', '1', '::1', '2021-03-03 20:02:34', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (24, 'Permission #1 Updated by User: #1', '1', '::1', '2021-03-03 20:07:58', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (25, 'Company Settings Updated by User: #1', '1', '::1', '2021-03-03 20:36:13', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (26, 'Administrator (admin) Logged in', '1', '::1', '2021-03-04 19:04:58', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (27, 'Administrator (admin) Logged in', '1', '::1', '2021-03-05 22:19:54', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (28, 'Administrator (admin) Logged in', '1', '::1', '2021-03-07 21:00:57', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (29, 'Administrator (admin) Logged in', '1', '::1', '2021-03-09 17:04:54', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (30, 'Administrator (admin) Logged in', '1', '::1', '2021-03-12 13:12:49', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (31, 'Administrator (admin) Logged in', '1', '::1', '2021-03-13 14:04:26', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (32, 'Administrator (admin) Logged in', '1', '::1', '2021-03-14 14:08:56', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (33, 'Administrator (admin) Logged in', '1', '::1', '2021-03-17 20:45:33', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (34, 'Administrator (admin) Logged in', '1', '::1', '2021-03-18 12:58:47', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (35, 'Administrator (admin) Logged in', '1', '::1', '2021-03-21 16:10:39', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (36, 'Administrator (admin) Logged in', '1', '::1', '2021-03-26 00:35:27', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (37, 'Administrator (admin) Logged in', '1', '::1', '2021-03-27 14:31:12', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (38, 'Administrator (admin) Logged in', '1', '::1', '2021-03-29 16:30:19', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (39, 'Administrator (admin) Logged in', '1', '::1', '2021-03-31 16:47:48', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (40, 'Administrator (admin) Logged in', '1', '::1', '2021-04-03 14:06:55', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (41, 'Administrator (admin) Logged in', '1', '::1', '2021-04-08 14:59:19', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (42, 'Administrator (admin) Logged in', '1', '::1', '2021-04-09 15:39:13', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (43, 'Company Settings Updated by User: #1', '1', '::1', '2021-04-09 16:39:29', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (44, 'Administrator (admin) Logged in', '1', '192.168.1.2', '2021-04-09 16:39:41', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (45, 'Administrator (admin) Logged in', '1', '122.173.206.57', '2021-04-09 17:12:32', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (46, 'Administrator (admin) Logged in', '1', '103.212.208.246', '2021-04-09 17:15:54', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (47, 'Administrator (admin) Logged in', '1', '::1', '2021-04-10 16:34:45', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (48, 'Administrator (admin) Logged in', '1', '::1', '2021-04-12 14:56:22', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (49, 'User: Administrator Logged Out', '1', '::1', '2021-04-12 16:01:03', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (50, 'Administrator (admin) Logged in', '1', '::1', '2021-04-12 16:01:19', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (51, 'User: Administrator Logged Out', '1', '::1', '2021-04-12 16:09:30', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (52, 'Administrator (admin) Logged in', '1', '::1', '2021-04-12 16:09:40', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (53, 'Administrator (admin) Logged in', '1', '::1', '2021-04-13 12:27:42', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (54, 'Administrator (admin) Logged in', '1', '::1', '2021-04-14 14:49:04', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (55, 'Administrator (admin) Logged in', '1', '::1', '2021-04-15 15:21:13', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (56, 'Role #1 Updated by User: #1', '1', '::1', '2021-04-15 16:05:04', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (57, 'Administrator (admin) Logged in', '1', '::1', '2021-04-15 19:48:35', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (58, 'Company Settings Updated by User: #1', '1', '::1', '2021-04-15 19:54:40', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (59, 'Role #1 Updated by User: #1', '1', '::1', '2021-04-15 19:57:11', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (60, 'Permission # Deleted by User: #1', '1', '::1', '2021-04-15 19:57:26', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (61, 'Administrator (admin) Logged in', '1', '::1', '2021-04-18 17:51:45', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (62, 'Administrator (admin) Logged in', '1', '::1', '2021-04-18 19:35:23', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (63, 'Role #1 Updated by User: #1', '1', '::1', '2021-04-18 20:40:27', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (64, 'Administrator (admin) Logged in', '1', '::1', '2021-04-19 23:00:58', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (65, 'Administrator (admin) Logged in', '1', '::1', '2021-04-20 17:48:42', '0000-00-00 00:00:00');
INSERT INTO `activity_logs` (`id`, `title`, `user`, `ip_address`, `created_at`, `updated_at`) VALUES (66, 'Role #2 Updated by User: #1', '1', '::1', '2021-04-20 19:57:19', '0000-00-00 00:00:00');


#
# TABLE STRUCTURE FOR: email_templates
#

DROP TABLE IF EXISTS `email_templates`;

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `code` text NOT NULL,
  `data` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `email_templates` (`id`, `name`, `code`, `data`, `created_at`) VALUES (1, 'Reset Password Template', 'reset_password', '<h1><strong>{company_name}</strong></h1>\r\n\r\n<h3>Click on Reset Link to Proceed : <a href=\"{reset_link}\">Reset Now</a></h3>\r\n', '2020-01-03 16:40:14');


#
# TABLE STRUCTURE FOR: permissions
#

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `code` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (1, 'Users List', 'users_list');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (2, 'Add Users', 'users_add');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (3, 'Edit Users', 'users_edit');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (4, 'Delete Users', 'users_delete');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (5, 'Users View', 'users_view');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (6, 'Activity Logs List', 'activity_log_list');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (7, 'Acivity Log View', 'activity_log_view');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (8, 'Roles List', 'roles_list');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (9, 'Add Roles', 'roles_add');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (10, 'Edit Roles', 'roles_edit');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (11, 'Permissions List', 'permissions_list');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (12, 'Add Permissions', 'permissions_add');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (13, 'Permissions Edit', 'permissions_edit');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (14, 'Delete Permissions', 'permissions_delete');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (15, 'Company Settings', 'company_settings');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (16, 'Backup', 'backup_db');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (17, 'Manage Email Templates', 'email_templates');
INSERT INTO `permissions` (`id`, `title`, `code`) VALUES (18, 'General Settings', 'general_settings');


#
# TABLE STRUCTURE FOR: role_permissions
#

DROP TABLE IF EXISTS `role_permissions`;

CREATE TABLE `role_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL,
  `permission` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (1, 1, 'users_list');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (2, 1, 'users_add');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (3, 1, 'users_edit');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (4, 1, 'users_delete');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (5, 1, 'users_view');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (6, 1, 'activity_log_view');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (7, 1, 'roles_list');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (8, 1, 'roles_add');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (9, 1, 'roles_edit');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (10, 1, 'permissions_list');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (11, 1, 'permissions_add');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (12, 1, 'permissions_edit');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (13, 1, 'permissions_delete');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (14, 1, 'company_settings');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (15, 1, 'activity_log_list');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (16, 1, 'email_templates');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (17, 1, 'general_settings');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (18, 1, 'backup_db');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (19, 2, 'users_list');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (20, 2, 'users_add');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (21, 2, 'users_edit');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (22, 2, 'users_delete');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (23, 2, 'users_view');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (24, 2, 'roles_list');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (25, 2, 'roles_add');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (26, 2, 'roles_edit');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (27, 2, 'permissions_list');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (28, 2, 'permissions_add');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (29, 2, 'permissions_edit');
INSERT INTO `role_permissions` (`id`, `role`, `permission`) VALUES (30, 2, 'permissions_delete');


#
# TABLE STRUCTURE FOR: roles
#

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `roles` (`id`, `title`) VALUES (1, 'Admin');
INSERT INTO `roles` (`id`, `title`) VALUES (2, 'Manager');


#
# TABLE STRUCTURE FOR: settings
#

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` text NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES (1, 'company_name', 'AdminPRO', '2018-06-21 17:37:59');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES (2, 'company_email', 'ramansaluja849@gmail.com', '2018-07-11 11:09:58');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES (3, 'timezone', 'Asia/Kolkata', '2018-07-15 19:54:17');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES (4, 'login_theme', '1', '2019-06-06 14:04:28');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES (5, 'date_format', 'd F, Y', '2020-01-04 01:31:45');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES (6, 'datetime_format', 'h:m a - d M, Y ', '2020-01-04 01:32:24');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES (7, 'google_recaptcha_enabled', '0', '2020-01-05 00:44:03');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES (8, 'google_recaptcha_sitekey', '6LdIWswUAAAAAMRp6xt2wBu7V59jUvZvKWf_rbJc', '2020-01-05 00:44:17');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES (9, 'google_recaptcha_secretkey', '6LdIWswUAAAAAIsdboq_76c63PHFsOPJHNR-z-75', '2020-01-05 00:44:40');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES (10, 'bg_img_type', 'jpeg', '2020-01-06 23:53:33');
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES (11, 'default_lang', 'en', '2021-04-12 15:53:06');


#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `phone` text NOT NULL,
  `address` longtext NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role` int(11) NOT NULL,
  `reset_token` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `img_type` varchar(3000) NOT NULL DEFAULT 'png',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `phone`, `address`, `last_login`, `role`, `reset_token`, `status`, `img_type`, `created_at`, `updated_at`) VALUES (1, 'Administrator', 'admin', 'admin@gmail.com', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', '123456', 'dsf', '2021-04-20 17:04:48', 1, '', 1, 'png', '2018-06-27 18:30:16', '0000-00-00 00:00:00');


