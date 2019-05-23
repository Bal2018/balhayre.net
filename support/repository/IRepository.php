<?php
/**
 * Contract for repository
 * Classes implementing this interface must implement all of the properties
 * 
 */

interface IRepository{

    function add($m);
    function remove($m);
    function update($m);

    function get($id);

}