<?php
/**
 * User Model
 * The properties in this Class must match the name of the columns in your 'Users' table in your database
 * 
 */

class UserModel extends Model
{

    public function IgnoreFieldsOnAdd()
    {
        return ["id"];
    }

    public function IgnoreFieldsOnUpdate()
    {
        return ["id"];
    }

    public $username = "";
    public $name = "";
    public $hash = "";

    public $ts = "";
    public $sessionid = "";
    public $attempt_count = 0;
}