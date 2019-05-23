<?php

/**
 * Created by PhpStorm.
 *  
 */
class NSConfig
{
    public $config;

    function __construct()
    {
        $this->config = simplexml_load_file(__DIR__ . "/../config.xml");
    }
}