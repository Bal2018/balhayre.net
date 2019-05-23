<?php
/**
 * Article Model
 * The properties in this Class must match the name of the columns in your 'Articles' table in your database
 * 
 */

class ArticleModel extends Model
{
    public function IgnoreFieldsOnAdd()
    {
        // When adding to DB the values for these will be ignored
        return ["id","created"];
    }

    public function IgnoreFieldsOnUpdate()
    {
        // When updating the DB these values will be ignored
        return ["id","created"];
    }

    public $id = null;
    public $created= null;
    public $title = "";
    public $contents = "";
    public $image = "";
    public $categories = "";
    public $viewedby= 0;
    public $isuseful = 1;

}