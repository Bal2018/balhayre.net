<?php
/**
 * Data parameter for database
 * 
 */

class NSParam
{
    public $name = "";
    public $value = "";
    public $type = '';

    function __construct($name,$val,$type)
    {
        $this->name = $name;
        $this->value = $val;
        $this->type = $type;
    }
}