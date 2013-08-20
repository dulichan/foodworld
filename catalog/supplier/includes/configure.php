<?php
/*
  $Id: configure.php,v 1.14 2003/02/21 16:55:24 dgw_ Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

// define our webserver variables
// FS = Filesystem (physical)
// WS = Webserver (virtual)
  define('HTTP_SERVER', 'http://www.yourdomain.com'); // eg, http://localhost or - https://localhost should not be NULL for productive servers
  define('HTTP_CATALOG_SERVER', 'http://www.yourdomain.com/');
  define('HTTPS_CATALOG_SERVER', '');
  define('ENABLE_SSL_CATALOG', 'false'); // secure webserver for catalog module
  define('DIR_FS_DOCUMENT_ROOT', '/var/www/vhosts/yourdomain.com/httpdocs/'); // where your pages are located on the server. if $DOCUMENT_ROOT doesnt suit you, replace with your local path. (eg, /usr/local/apache/htdocs)
  define('DIR_WS_S_ADMIN', '/supplier/');
  define('DIR_WS_ADMIN', '/admin/');
  define('DIR_FS_ADMIN', DIR_FS_DOCUMENT_ROOT . DIR_WS_ADMIN);
  define('DIR_FS_S_ADMIN', DIR_FS_DOCUMENT_ROOT . DIR_WS_S_ADMIN);
// define our Catalog path / or /catalog/
  define('DIR_WS_CATALOG', '');
  define('DIR_FS_CATALOG', DIR_FS_DOCUMENT_ROOT . DIR_WS_CATALOG);
  define('DIR_WS_IMAGES', DIR_WS_ADMIN . '/images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_CATALOG_IMAGES', DIR_WS_CATALOG . '/images/');
  define('DIR_WS_INCLUDES', DIR_FS_DOCUMENT_ROOT . DIR_WS_ADMIN . 'includes/');
  define('DIR_WS_SUPPLIER_INCLUDES', DIR_FS_DOCUMENT_ROOT . DIR_WS_S_ADMIN . 'includes/');
  define('DIR_WS_BOXES', DIR_WS_INCLUDES . 'boxes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');
  define('DIR_WS_CATALOG_LANGUAGES', DIR_WS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_LANGUAGES', DIR_FS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_IMAGES', DIR_FS_CATALOG . 'images/');
  define('DIR_FS_CATALOG_MODULES', DIR_FS_CATALOG . 'includes/modules/');
  define('DIR_FS_BACKUP', DIR_FS_ADMIN . 'backups/');

// define our database connection
  define('DB_SERVER', 'localhost');
  define('DB_SERVER_USERNAME', 'username');
  define('DB_SERVER_PASSWORD', 'password');
  define('DB_DATABASE', 'databesename');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
?>