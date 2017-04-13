<?php
class Db_Connect
{
    public function __construct()
    {
        $hostname='localhost';
        $username='root';
        $password='';
        $dbname='myrecipe';
        $conn=  mysql_connect($hostname,$username,$password);
        if($conn)
        {
            if(mysql_select_db($dbname))
            {
                // echo 'Database connected';
            }
            else
            {
                die('database problem'.mysql_error());
            }
        }
        else
        {
            die('connection problem'.mysql_error());
        }
    }
}
?>
