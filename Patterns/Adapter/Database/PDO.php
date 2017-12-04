<?php

/**
 * Created by PhpStorm.
 * User: hasee-pc
 * Date: 2017/11/22
 * Time: 15:51
 */
namespace Patterns\Adapter\Database;
use Patterns\Adapter\Database;


class PDO implements Database
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$passwd);
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