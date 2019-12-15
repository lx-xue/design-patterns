<?php

class Magic
{
    protected $array=array();

    //魔术方法 设置属性(自动调用)
    function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this->array[$name]=$value;
    }
    //获取属性(自动调用)
    function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->array[$name];
    }

    //针对方法(调用不存在的方法是自动调用该魔术方法,$name方法名,$arguments方法参数)
    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        return '方法不存在!';
    }
    //也是针对调用函数(  不同时这个是针对于调用类中的静态方法就是$class::fun()  )
    static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        return '静态方法不存在!';
    }

    //当对象被当成字符串输出时,调用该函数,该函数会将对象转成字符串输出,例如echo输出一个对象时,正常情况下echo一个对象会报错
    function __toString()
    {
        // TODO: Implement __toString() method.
        return __CLASS__;
    }

    //对象被当成一个函数调用时,自动调用此魔术方法
    function __invoke($param)
    {
        // TODO: Implement __invoke() method.
        var_dump($param);
        return 'invoke';
    }
}
