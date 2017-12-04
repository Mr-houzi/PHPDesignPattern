<?php

namespace Patterns\Adapter\Database;
use Patterns\Adapter\Database;

class MySQL implements Database
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn =mysql_connect($host,$user,$passwd);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = mysql_query($sql,$this->conn);
        return $res;
    }

    function close()
    {
        mysql_close($this->conn);
    }
}