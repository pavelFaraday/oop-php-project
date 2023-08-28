<?php

class Photo extends Db_object
{
    protected static $db_table = "photos";
    protected static $db_table_fields = array('photo_id', 'title', 'description', 'filename', 'type', 'size');
    public $photo_id;
    public $title;
    public $description;
    public $filename;
    public $type;
    public $size;


    // create properties for File Upload
    public $tmp_path;
    public $upload_directory = "images";
    public $errors = array();
    public $upload_errors_array = array(
        UPLOAD_ERR_OK => "There is Nor ERROR",
        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload max_ filesize directives",
        UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX FILE SIZE directive",
        UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded.",
        UPLOAD_ERR_NO_FILE => "No file was uploaded.",
        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder.",
        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk.",
        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload."
    );

    // passing -> $_FILES['uploaded_file'] as an argument
    public function set_file($file)
    {
        // file is empty ||it is not a file || is not an array
        if (empty($file) || !$file || !is_array($file)) {
            $this->errors[] = "There was no file uploaded here";
            return false;
        } elseif ($file['error'] != 0) { // if uploaded file has errors 
            $this->errors[] = $this->upload_errors_array[$file['error']];
            return false;
        } else {
            $this->filename = basename($file['name']);
            $this->tmp_path = $file['tmp_path'];
            $this->type = $file['type'];
            $this->size = $file['size'];
        }
    }

    public function save()
    {
        if ($this->photo_id) {
            $this->update();
        } else {
            if (!empty($this->errors)) { // if there is an error
                return false;
            }
            if (empty($this->filename) || empty($this->tmp_path)) {
                $this->errors[] = "The file is not available";
                return false;
            }

            // /Applications/MAMP/htdocs/oop-php-project/admin/images/cars.jpeg
            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->filename;

            // check f we have the same file in project
            if (file_exists($target_path)) {
                $this->errors[] = "The file {$this->filename} already exists";
                return false;
            }

            // if file will be saved in new folder, check if create() query was successfull --> then unset $tmp_path (because we don't need it anymore)
            if (move_uploaded_file($this->tmp_path, $target_path)) {
                if ($this->create()) {
                    unset($this->tmp_path);
                    return true;
                }
            } else {
                $this->errors[] = "The file directory does not have permission!";
                return false;
            }
        }
    }
}
