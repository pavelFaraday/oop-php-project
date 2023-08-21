<?php

require_once("new_config.php");

class Database
{
    public $connection;

    function __construct()
    {
        $this->open_db_connection();
    }

    public function open_db_connection()
    {
        // Connect to DB
        $this->connection = mysqli_connect(DB_Host, DB_USER, DB_PASS, DB_NAME);

        if (mysqli_connect_errno()) {
            die("Database connection failed badly " . mysqli_error());
        }
    }

    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        if (!$result) {
            die("Query Failed");
        }

        return $result;
    }
}

$database = new Database();
