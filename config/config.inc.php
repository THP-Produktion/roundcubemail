<?php

if (getenv('DBUSER') !== false && getenv('DBPASS') !== false && getenv('DBNAME') !== false) {
  $config['db_dsnw'] = 'mysql://' . getenv('DBUSER') . ':' . getenv('DBPASS') . '@mysql/' . getenv('DBNAME');
  $config['db_prefix'] = 'mailcow_rc1';
} else {
  $config['db_dsnw'] = 'sqlite:////app/sqlite.db?mode=0640';
}

$config['log_driver'] = 'stdout';
$config['db_dsnr'] = '';

$config['imap_conn_options'] = array(
  'ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true)
);



$config['smtp_conn_options'] = array(
  'ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true)
);
$config['managesieve_conn_options'] = array(
  'ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true)
);

$config['enable_installer'] = false;

$config['default_host'] = 'tls://dovecot';
$config['default_port'] = '143';

$config['smtp_server'] = 'tls://postfix';
$config['smtp_port'] = 587;
$config['smtp_user'] = '%u';
$config['smtp_pass'] = '%p';

$config['product_name'] = 'RCube';
$config['skin'] = 'elastic';

$config['des_key'] = (getenv('DES_KEY') !== false) ? getenv('DES_KEY') : 'rcmail-!24ByteDESkey*Str';
$config['plugins'] = array(
    'archive',
    'zipdownload',
    'password',
    'managesieve'
);

$config['managesieve_port'] = 4190;
$config['managesieve_host'] = 'tls://dovecot';
$config['managesieve_vacation'] = 1;

$config['temp_dir'] = '/tmp/roundcube-temp';

$config['zipdownload_selection'] = true;

$config['debug_level'] = 1;
$config['log_date_format'] = 'Y-M-d H:i:s O';

if (filter_var(getenv('DEBUG'), FILTER_VALIDATE_BOOLEAN)) {
  $config['debug_level'] = 4;
  $config['sql_debug'] = true;
  $config['imap_debug'] = true;
  $config['ldap_debug'] = true;
  $config['smtp_debug'] = true;
  $config['log_dir'] = '/roundcube/logs';
  $config['log_driver'] = "file";
}
