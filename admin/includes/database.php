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
        $this->connection = new mysqli(DB_Host, DB_USER, DB_PASS, DB_NAME);

        if ($this->connection->connect_errno) {
            die("Database connection failed badly " . $this->connection->connect_error);
        }
    }
    // 2. execute SQL queries against a MySQL database
    public function query($sql)
    {
        $result = $this->connection->query($sql);
        $this->confirm_query($result);
        return $result;
    }
    // 3. check SQL query
    private function confirm_query($result)
    {
        if (!$result) {
            die("Query Failed " . $this->connection->error);
        }
    }
    // 4. escape special characters in a string to make it safe for insertion into a MySQL database using the MySQLi extension
    public function escape_string($string)
    {
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
    }
    public function the_insert_id()
    {
        return $this->connection->insert_id;
    }

    /*     public function insert_id()
    {
        return mysqli_insert_id($this->connection);
    } */
}

$database = new Database();
