<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 4/3/2017
 * Time: 12:36 AM
 */
require 'db_connect.php';

class Admin
{
    public function __construct()
    {
        $db_connect=new Db_Connect();
    }
    public function all_ingredients()
    {
        $sql="SELECT * from tbl_ingredients ORDER BY ingredient_name";
        $result=mysql_query($sql);
        return $result;
    }
}