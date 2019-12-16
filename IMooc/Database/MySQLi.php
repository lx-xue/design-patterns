<?php
namespace IMooc\Database;

use IMooc\IDatabase;

class MySQLi implements IDatabase
{
    protected $conn;
    function connect($host,$user,$passwd,$dbname)
    {
        //mysqli连接数据库方法
        $conn = mysqli_connect($host,$user,$passwd,$dbname);
        $this->conn = $conn;
    }
    function query($sql)
    {
        //sql语句执行结果(mysqli方法)
        return mysqli_query($this->conn,$sql);
    }
    function close()
    {
        mysqli_close($this->conn);
    }

}