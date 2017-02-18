<?php
// HTTP
define('HTTP_SERVER', 'http://ec2-52-33-208-186.us-west-2.compute.amazonaws.com/');
#define('HTTP_SERVER', 'http://0.0.0.0:9888/');

// HTTPS
define('HTTPS_SERVER', 'https://ec2-52-33-208-186.us-west-2.compute.amazonaws.com/');

define('DIR_APPLICATION', '/var/www/html/catalog/');
define('DIR_SYSTEM', '/var/www/html/system/');
define('DIR_IMAGE', '/var/www/html/image/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_SYSTEM . 'storage/cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM . 'storage/download/');
define('DIR_LOGS', DIR_SYSTEM . 'storage/logs/');
define('DIR_MODIFICATION', DIR_SYSTEM . 'storage/modification/');
define('DIR_UPLOAD', DIR_SYSTEM . 'storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'db');
define('DB_USERNAME', 'opencartuser');
define('DB_PASSWORD', '123sqwert');
define('DB_DATABASE', 'opencartdb');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
