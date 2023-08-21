<?php

require_once("new_config.php");

class Database
{
    public $connection;

    // setup automatic connection
    function __construct()
    {
        $this->open_db_connection();
    }

    // 1. open a new connection to the MySQL server
    public function open_db_connection()
    {
        // Connect to DB
        $this->connection = mysqli_connect(DB_Host, DB_USER, DB_PASS, DB_NAME);

        if (mysqli_connect_errno()) {
            die("Database connection failed badly " . mysqli_error());
        }
    }

    // 2. execute SQL queries against a MySQL database
    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        return $result;
    }

    // 3. check SQL query
    private function confirm_query($result)
    {
        if (!$result) {
            die("Query Failed");
        }
    }

    // 4. escape special characters in a string to make it safe for insertion into a MySQL database using the MySQLi extension
    public function escape_string($string)
    {
        $escaped_string = mysqli_real_escape_string($this->connection, $string);
        return $escaped_string;
    }
}

$database = new Database();
