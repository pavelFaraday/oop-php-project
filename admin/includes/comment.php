<?php

class Comment extends Db_object
{
    protected static $db_table = "comments";
    protected static $db_table_fields = array('id', 'photo_id', 'author', 'body');
    public $id;
    public $author;
    public $photo_id;
    public $body;
}
