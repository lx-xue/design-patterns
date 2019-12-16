<?php
namespace IMooc;

//工厂模式 (即在调用一个类时,不直接new,而是调用工厂里面的方法,间接new一个实例,便于类的参数修改)
class Factory
{

    static function createDatabase()
    {
        $db = Database::getDb();
        //使用注册模式类,映射到注册树上  注册之后可以直接在注册树上去拿这个实例
        Register::set('db1',$db);
        return $db;
    }


}