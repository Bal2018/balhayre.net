<?php
/**
 * Results to return as JSON to browser
 * 
 */

class NSResult
{
    public $Title = "";
    public $Message = "";
    public $HasErrors = false;

    public $Data = [];

    function __toString()
    {
        return json_encode($this,JSON_PRETTY_PRINT);
    }
}