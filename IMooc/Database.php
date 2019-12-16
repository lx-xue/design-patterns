<?php
namespace IMooc;

//定义一个接口,适配器模式数据库操作的接口(设配器模式主要功能是将不同的函数统一接口)
interface IDatabase
{
    function connect($host,$user,$passwd,$dbname);
    function query($sql);
    function close();
}

// 数据库操作类 (链式操作) 单例模式实现避免资源浪费
class Database
{
    private static $db;
    private function __construct()
    {

    }

    static function getDb()
    {
        if(self::$db){
            return self::$db;
        }else{
            return self::$db = new self();
        }
    }
    public function where($where)
    {

        return $this;  //链式操作的关键,返回该类的一个对象
    }

    public function order($order)
    {

        return $this;
    }

    public function limit($limit)
    {

        return $this;
    }



}
