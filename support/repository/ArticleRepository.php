<?php
/**
 * Article repository
 * 
 */

Tools::DependsOn("/models/ArticleModel.php");

class ArticleRepository extends Repository
{

    /**
     * @param $m ArticleModel
     * @return bool
     */
    function add($m)
    {
        return $this->_add("blogPosts",$m);
    }

    /**
     * @param $m ArticleModel
     * @return bool
     */
    function remove($m)
    {
        return $this->_remove("blogPosts",$m);
    }

    /**
     * @param $m ArticleModel
     * @return bool
     */
    function update($m)
    {
        return $this->_update("blogPosts",$m);
    }

    /**
     * @param $id int
     * @return ArticleModel|null
     */
    function get($id)
    {

        // get row by id and return
        $row = $this->db->BEGIN()->SELECT("*")->FROM("blogPosts")->WHERE([
            new NSParam('id',$id,'i')
        ])->GET_FIRST();

        // if row doesn't exist, return nothing
        if ($row === false) return null;

        // populate new model
        $m = new ArticleModel();
        $m->loadValues($row);

        return $m;
    }

    /**
     * @return ArticleModel[]
     */
    function getAll(){
        $collection = [];
        $rows = $this->_getAll("blogPosts");

        foreach ($rows as $row){
            // populate new model
            $m = new ArticleModel();
            $m->loadValues($row);
            $collection[] = $m;
        }

        return $collection;
    }
}