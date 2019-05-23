<?php
/**
 * Service Provider
 * 
 */

class NSServiceProvider
{
    // Repos
    public $ArticleRepository;
    public $UserRepository;

    // Managers
    public $ViewManager;

    // Data
    public $Config;

    function __construct()
    {
        $this->ArticleRepository = new ArticleRepository();
        $this->UserRepository = new UserRepository();

        $this->ViewManager = new NSViewManager();
    }

    function startService(){
        include_once $_SERVER['DOCUMENT_ROOT'] . "/routes.php";
    }
}