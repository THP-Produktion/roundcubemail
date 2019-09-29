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

// Enables messages cache. Only 'db' cache is supported.
// This requires an IMAP server that supports QRESYNC and CONDSTORE
// extensions (RFC7162). See synchronize() in program/lib/Roundcube/rcube_imap_cache.php
// for further info, or if you experience syncing problems.
$config['imap_cache'] = 'db';
$config['messages_cache'] = true;
// Lifetime of IMAP indexes cache. Possible units: s, m, h, d, w
$config['imap_cache_ttl'] = '10d';
// Lifetime of messages cache. Possible units: s, m, h, d, w
$config['messages_cache_ttl'] = '10d';
// Maximum cached message size in kilobytes.
// Note: On MySQL this should be less than (max_allowed_packet - 30%)
$config['messages_cache_threshold'] = 50;
$config['display_product_info'] = 2;
$config['max_message_size'] = '2G';
$config['email_dns_check'] = true;
$config['enable_spellcheck'] = false;
$config['max_pagesize'] = 1000;

$config['show_images'] = 1;
$config['htmleditor'] = 4;
$config['mail_read_time'] = 10;
$config['logout_purge'] = true;
$config['check_all_folders'] = true;


// Default font for composed HTML message.
// Supported values: Andale Mono, Arial, Arial Black, Book Antiqua, Courier New,
// Georgia, Helvetica, Impact, Tahoma, Terminal, Times New Roman, Trebuchet MS, Verdana
$config['default_font'] = 'Verdana';
// Default font size for composed HTML message.
// Supported sizes: 8pt, 10pt, 12pt, 14pt, 18pt, 24pt, 36pt
$config['default_font_size'] = '10pt';
