<?php

namespace IMooc;

//注册器模式 (简单来说就是将一个类的实例存放在一个空间中,可以随时在这个空间去拿)
class Register
{

    protected static $objects;
    //注册
    static function set($alias,$object)
    {
        self::$objects[$alias] = $object;
    }
    //获取注册树上的类名为$name的实例
    static function get($name)
    {
        return self::$objects[$name];
    }
    //移除
    static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }


}