<?php
/**
 * User repository
 * 
 */

Tools::DependsOn("/models/UserModel.php");

class UserRepository extends Repository
{

    /**
     * @param $m UserModel
     * @return bool
     */
    function add($m)
    {
        return $this->_add("users",$m);
    }

    /**
     * @param $m UserModel
     * @return bool
     */
    function remove($m)
    {
        return $this->_remove("users",$m);
    }

    /**
     * @param $m UserModel
     * @return bool
     */
    function update($m)
    {
        return $this->_update("users",$m);
    }

    /**
     * @param $id int
     * @return UserModel|null
     */
    function get($id)
    {
        // get row by id and return
        $row = $this->db->BEGIN()->SELECT("*")->FROM("users")->WHERE([
            new NSParam('id',$id,'i')
        ])->GET_FIRST();

        // if row doesn't exist, return nothing
        if ($row === false) return null;

        // populate new model
        $m = new UserModel();
        $m->loadValues($row);

        return $m;
    }

    /**
     * @param $username string
     * @return UserModel|null
     */
    function getByUsername($username)
    {
        // get row by id and return
        $row = $this->db->BEGIN()->SELECT("*")->FROM("users")->WHERE([
            new NSParam('username',$username,'s')
        ])->GET_FIRST();

        // if row doesn't exist, return nothing
        if ($row === false) return null;

        // populate new model
        $m = new UserModel();
        $m->loadValues($row);

        return $m;
    }

    /**
     * @param $sessionid string
     * @return UserModel|null
     */
    function getBySession($sessionid)
    {
        // get row by id and return
        $row = $this->db->BEGIN()->SELECT("*")->FROM("users")->WHERE([
            new NSParam('sessionid',$sessionid,'s')
        ])->GET_FIRST();

        // if row doesn't exist, return nothing
        if ($row === false) return null;

        // populate new model
        $m = new UserModel();
        $m->loadValues($row);

        return $m;
    }
}