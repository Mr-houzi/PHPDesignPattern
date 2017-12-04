<?php

//定义适配器模式-接口

namespace Patterns\Adapter;

interface Database{
    function connect($host,$user,$passwd,$dbname);
    function query($sql);
    function close();
}

?>