<?php
/**
 * Created by PhpStorm.
 * User: 不动
 * Date: 2019/10/31
 * Time: 9:59
 */
namespace Common\Database;
use Common\IDatabase;

class MySQLi implements IDatabase
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn=mysqli_connect($host, $user, $passwd, $dbname);
        $this->conn=$conn;
    }

    function query($sql){
        return mysqli_query($this->conn,$sql);
    }

    function close(){
        mysqli_close($this->conn);
    }
}