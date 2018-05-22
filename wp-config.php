<?php
define('DB_NAME', 'caiocosti-wp-kNrZNLEc');
define('DB_USER', 'T7wBAJU5QV78');
define('DB_PASSWORD', 'MA4w9HsV6YGGwNXC');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'bBE7yOv75ianVp51NmbEGz2ZpDg7cweQr2Y1dhMt');
define('SECURE_AUTH_KEY',  'OQXhm44lDIvtIhe0CKARzMthlLEtBBOjajN73rwX');
define('LOGGED_IN_KEY',    '36pMtifp8IuRvHTptCYmOomIco7LnyygwkswUYeE');
define('NONCE_KEY',        'lgQD4jDK8MYhQFC40aNNlhBIjbW0p9L9Jang3zct');
define('AUTH_SALT',        'cgdVP52otA8uhchgbgM0s1jFOKho1REOFw3hMxB8');
define('SECURE_AUTH_SALT', 'b3bpJccjqr3MylKaqFWY4rjoetyPWSlOmHSN4ozg');
define('LOGGED_IN_SALT',   'uzpzRmSDaSSqYAXAcp909Bruwqqx3DmmpBOIFKPa');
define('NONCE_SALT',       'cgjWYuHpUFBoWtSqNIBiUORSeKG7LLBDkSEhzvyu');

$table_prefix  = 'wp_8de1ec83a5_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
