<?php
# Database Configuration
define( 'DB_NAME', 'snapshot_wdday' );
define( 'DB_USER', 'wdday' );
define( 'DB_PASSWORD', 'o1G0z1NzD3lPeri4gUpU' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '62iCjj0(m*h/e0xJl|JQJ-`c7 :uEkP$w/V1B_Y*83&1+k[TW5d[&nzzJ@Q4z<mG');
define('SECURE_AUTH_KEY',  'rHH04uFf$kyu*HbH9g*~FJasjU-KCr84962z>3-aivp:A_R8+6q<VG}aEQ`MGyvp');
define('LOGGED_IN_KEY',    'cdrr/$M 6ejr.>%&V% }hUFt#eKLz5^Y?>&KVFg2^`I-(#y;K>DX)2trX3[;Z0^b');
define('NONCE_KEY',        'S?M/I3dn=T`5-^%Bt-|2?4kDhX4lT/EDO_4u)Bn_!H4.u|niO~fDI[1*Iq9-`W#)');
define('AUTH_SALT',        '@-|}l(4 c/`<wHF<J^Z*>&Xhl`<hi/p_DIl5YOUOe2?<Fr.23uP5^}CN}65vCrwg');
define('SECURE_AUTH_SALT', ']Y.ZHI3H`W%@G1R~ ,+2fxu,l(Bhg-K:$8}Tsn3|CgAv&K%w=r^7NP[K9$nyPTce');
define('LOGGED_IN_SALT',   '*(eMB>,&QQEtyAFMvP-z-5nm-/m1vswX+[{Sz~5`G-^a#~Uu(hN^-Uyc%q FKo%+');
define('NONCE_SALT',       'Sl9`uf^|g_yyXM-f>+15#k=6vmy7@C+@pl&^.c]-R*1o-Aa+N%{_zfm5M8^mixQ=');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'wdday' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '3e3f14f8145242fdb37dcb2d210422a71f60cf64' );

define( 'WPE_CLUSTER_ID', '110939' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'day.dk', 1 => 'www.day.dk', 2 => 'wdday.wpengine.com', 3 => 'm.day.dk', );

$wpe_varnish_servers=array ( 0 => 'pod-110939', );

$wpe_special_ips=array ( 0 => '104.155.5.173', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );

define( 'WP_SITEURL', 'http://wdday.staging.wpengine.com' );

define( 'WP_HOME', 'http://wdday.staging.wpengine.com' );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
