<?php
namespace IMooc\Database;

use IMooc\IDatabase;

class MySQL implements IDatabase
{
    protected $conn;
    function connect($host,$user,$passwd,$dbname)
    {
        //mysql连接数据库方法
        $conn = mysql_connect($host,$user,$passwd);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }
    function query($sql)
    {
        //sql语句执行结果(mysql方法)
        return mysql_query($sql);
    }
    function close()
    {
        mysqli_close($this->conn);
    }

}