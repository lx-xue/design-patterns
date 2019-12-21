<?php
//入口文件
define("BASEDIR", __DIR__);//定义网站根目录

include BASEDIR . '/IMooc/Loader.php';//加载IMooc模块

spl_autoload_register('\\IMooc\\Loader::autoload');//将IMooc模块自动加载文件注册到自动载入

//$db = IMooc\Factory::createDatabase();
//$db = IMooc\Database::getDb();
//$db1 = IMooc\Register::get('db1');
//$db = new IMooc\Database\MySQL();

//ORM  user表id=1的数据
$user = new IMooc\User(1);
//$user->name = 'xiaoxiao';
//$user->mobile = '18555668998';
//$user->regtime = time();

//观察者模式
class Event extends \IMooc\EventGenerator
{
    function trigger()
    {
        $this->notify();
    }
}
//观察者1
class Observer1 implements \IMooc\Observer
{
    public function update($event_info = null)
    {
        // TODO: Implement update() method.
        echo '逻辑1';
    }
}
//观察者2
class Observer2 implements \IMooc\Observer
{
    public function update($event_info = null)
    {
        // TODO: Implement update() method.
        echo '逻辑2';
    }
}
$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->trigger();
