<?php
namespace IMooc;

// 数据库操作类 (链式操作)
class Database
{
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
