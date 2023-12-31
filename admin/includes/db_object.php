<?php

class Db_object
{
    public static function find_all()
    {
        return static::find_by_query("SELECT * FROM " . static::$db_table . " ");
    }

    public static function find_by_id($id)
    {
        $the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . " WHERE id=$id LIMIT 1");
        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

    public static function find_by_query($sql)
    {
        global $database;
        $result_set = $database->query($sql);
        $the_object_array = array();
        while ($row = mysqli_fetch_array($result_set)) {
            $the_object_array[] = static::instantation($row);
        }
        return $the_object_array;
    }

    public static function instantation($the_record)
    {
        $calling_class = get_called_class();
        $the_object = new $calling_class;

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

    protected function properties()
    {
        $properties = array();
        foreach (static::$db_table_fields as $db_field) {
            if (property_exists($this, $db_field)) {
                $properties[$db_field] = $this->$db_field;
            }
        }
        return $properties;
    }

    protected function clean_properties()
    {
        global $database;
        $clean_properties = array();

        foreach ($this->properties() as $key => $value) {
            $clean_properties[$key] = $database->escape_string($value);
        }
        return $clean_properties;
    }

    // check if user ID exists in DB..
    public function save()
    {
        return isset($this->id) ? $this->update() : $this->create();
    }

    // INSERT new User in DB
    public function create()
    {
        global $database;
        $properties = $this->clean_properties();

        $sql = "INSERT INTO " . static::$db_table . "(" . implode(",", array_keys($properties)) . ")";
        $sql .= "VALUES ('" . implode("','", array_values($properties)) . "')";

        if ($database->query($sql)) {
            $this->id = $database->the_insert_id();
        } else {
            return false;
        }
    }


    // UPDATE User in DB
    public function update()
    {
        global $database;
        $properties = $this->clean_properties();
        $properties_pairs = array();

        foreach ($properties as $key => $value) {
            $properties_pairs[] = "{$key}='{$value}'";
        }

        $sql = "UPDATE  " . static::$db_table . " SET ";
        $sql .= implode(", ", $properties_pairs);
        $sql .= " WHERE id = " . $database->escape_string($this->id);

        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ?  true : false;
    }

    // DELETE User FROM DB
    public function delete()
    {
        global $database;

        $sql = "DELETE FROM  " . static::$db_table . " ";
        $sql .= "WHERE id=" . $database->escape_string($this->id);
        $sql .= " LIMIT 1";

        $database->query($sql);
        return (mysqli_affected_rows($database->connection) == 1) ?  true : false;
    }


    public static function count_all()
    {
        global $database;
        $sql = "SELECT COUNT(*) FROM " . static::$db_table;
        $result_set = $database->query($sql);
        $row = mysqli_fetch_array($result_set);
        return array_shift($row);
    }


    /* -------------------------------------------------------------------------- */
    /*                                CREATE PHOTO                                */
    /* -------------------------------------------------------------------------- */

    protected function properties_photo()
    {
        $properties_photo = array();
        foreach (static::$insert_photo_table as $db_field_photo) {
            if (property_exists($this, $db_field_photo)) {
                $properties_photo[$db_field_photo] = $this->$db_field_photo;
            }
        }
        return $properties_photo;
    }

    protected function clean_properties_photo()
    {
        global $database;
        $clean_properties_photo = array();

        foreach ($this->properties_photo() as $key => $value) {
            $clean_properties_photo[$key] = $database->escape_string($value);
        }
        return $clean_properties_photo;
    }
    public function create_photo()
    {
        global $database;
        $properties_photo = $this->clean_properties_photo();

        $sql = "INSERT INTO " . static::$db_table . "(" . implode(",", array_keys($properties_photo)) . ")";
        $sql .= "VALUES ('" . implode("','", array_values($properties_photo)) . "')";

        if ($database->query($sql)) {
            $this->id = $database->the_insert_id();
            return true;
        } else {
            return false;
        }
    }

    /* -------------------------------------------------------------------------- */
    /*                                CREATE PHOTO                                */
    /* -------------------------------------------------------------------------- */
}
