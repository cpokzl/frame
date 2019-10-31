<?php
/**
 * Created by PhpStorm.
 * User: 不动
 * Date: 2019/10/31
 * Time: 9:59
 */
namespace Common\Database;

use Common\IDatabase;

class MySQL implements IDatabase
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysql_connect($host, $user, $passwd);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = mysql_query($sql, $this->conn);
        return $res;
    }

    function close()
    {
        mysql_close($this->conn);
    }
}