<?php

class User
{
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    public static function find_all_users()
    {
        return self::find_this_query("SELECT * FROM users");
    }
    public static function find_user_by_id($user_id)
    {
        $the_result_array = self::find_this_query("SELECT * FROM users WHERE id=$user_id LIMIT 1");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
    public static function find_this_query($sql)
    {
        global $database;
        $result_set = $database->query($sql);
        $the_object_array = array();
        while ($row = mysqli_fetch_array($result_set)) {
            $the_object_array[] = self::instantation($row);
        }
        return $the_object_array;
    }
    public static function verify_user($username, $password)
    {
        global $database;
        $username = $database->escape_string($username);
        $password = $database->escape_string($password);

        $sql = "SELECT * FROM users WHERE ";
        $sql .= "username = '{$username}' ";
        $sql .= "AND password = '{$password}' ";
        $sql .= "LIMIT 1";

        $the_result_array = self::find_this_query($sql);
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }
    public static function instantation($the_record)
    {
        $the_object = new self;

        foreach ($the_record as $the_attribute => $value) {
            if ($the_object->has_the_attribute($the_attribute)) {
                $the_object->$the_attribute = $value;
            }
        }
        return $the_object;
    }
    private function has_the_attribute($the_attribute)
    {
        // Get all the properties of the given object (User)
        $object_properties =  get_object_vars($this);

        // check if array given key ($the_attribute) exists in current array ($object_properties)
        return array_key_exists($the_attribute, $object_properties);
    }

    // INSERT new User in DB
    public function create()
    {
        global $database;

        $sql = "INSERT INTO users (username, password, first_name, last_name)";
        $sql .= "VALUES ('";
        $sql .= $database->escape_string($this->username) . "', '";
        $sql .= $database->escape_string($this->password) . "', '";
        $sql .= $database->escape_string($this->first_name) . "', '";
        $sql .= $database->escape_string($this->last_name) . "')";

        if ($database->query($sql)) {
            $this->id = $database->insert_id();
        } else {
            return false;
        }
    }

    // UPDATE User in DB
    public function update()
    {
        global $database;

        $sql = "UPDATE users SET ";
        $sql .= "username = '" . $database->escape_string($this->username) . "', ";
        $sql .= "password = '" . $database->escape_string($this->password) . "', ";
        $sql .= "first_name = '" . $database->escape_string($this->first_name) . "', ";
        $sql .= "last_name = '" . $database->escape_string($this->last_name) . "' ";
        $sql .= "WHERE id = " . $database->escape_string($this->id);

        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ?  true : false;
    }

    // DELETE User FROM DB
    public function delete()
    {
        global $database;

        $sql = "DELETE FROM users ";
        $sql .= "WHERE id=" . $database->escape_string($this->id);
        $sql .= " LIMIT 1";

        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ?  true : false;
    }
}
