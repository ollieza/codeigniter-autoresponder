<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------
// Autoresponder class config
// ------------------------------------------------------------------------

// used for development to switch autoresponder emails ON or OFF
$config['autoresponder_enable'] = TRUE;
$config['autoresponder_bcc_notification_email'] = 'notify@yourdomain.com';

$config['autoresponder_from_email'] = "info@yourdomain.com";
$config['autoresponder_from_name'] = 'Your website name';

$config['autoresponder_mailtype'] = 'text';
$config['autoresponder_mailcharset'] = 'utf-8';

// SMTP settings
$config['autoresponder_use_smtp'] = FALSE;
$config['autoresponder_protocol'] = 'smtp';
$config['autoresponder_smtp_host'] = '';
$config['autoresponder_smtp_user'] = '';
$config['autoresponder_smtp_pass'] = '';
$config['autoresponder_smtp_port'] = 465;
$config['autoresponder_smtp_timeout'] = 5;

?>