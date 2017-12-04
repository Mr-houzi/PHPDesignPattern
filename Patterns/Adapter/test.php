<?php

include 'Database.php';
include 'Database/MySQL.php';
include 'Database/MySQLi.php';
include 'Database/PDO.php';

//使用PDO操作数据库
$db = new Patterns\Adapter\Database\PDO();
//使用MySQL操作数据库
//$db = new Patterns\Adapter\Database\MySQL();
//使用MySQLi操作数据库
//$db = new Patterns\Adapter\Database\MySQLi();

$db->connect('localhost','root','root','test');
$db->query("show tables");
//var_dump($db->query("show tables"));
$db->close();