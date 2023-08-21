<?php
// Database Connection Constants
define('DB_Host', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'gallery_db');

// Connect to DB
$connection = mysqli_connect(DB_Host, DB_USER, DB_PASS, DB_NAME);

// check DB connection
if ($connection) {
    echo "true";
}
