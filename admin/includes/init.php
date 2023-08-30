<?php

// define constant with value "/"
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// define absolute root directory --> "/Applications/MAMP/htdocs/oop-php-project"
define('SITE_ROOT', DS . 'Applications' . DS . 'MAMP' . DS . 'htdocs' . DS . 'oop-php-project');

// define 'includes' folder
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');

require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
require_once(INCLUDES_PATH . DS . "photo.php");
require_once("session.php");
require_once(INCLUDES_PATH . DS . "comment.php");
