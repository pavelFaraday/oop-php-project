<?php

// define constant with value "/"
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// define root directory for uploads --> "/Applications/MAMP/htdocs/oop-php-project/gallery"
define('SITE_ROOT', DS . 'Applications' . DS . 'MAMP' . DS . 'htdocs' . DS . 'oop-php-project');

// define 'includes' folder
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');

require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
require_once("photo.php");
require_once("session.php");
