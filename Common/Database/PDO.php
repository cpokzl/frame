<?php
/**
 * Created by PhpStorm.
 * User: 不动
 * Date: 2019/10/31
 * Time: 10:00
 */

namespace Common\Database;

use Common\IDatabase;

class PDO implements IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}