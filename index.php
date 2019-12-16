<?php
//入口文件
define("BASEDIR", __DIR__);//定义网站根目录

include BASEDIR . '/IMooc/Loader.php';//加载IMooc模块

spl_autoload_register('\\IMooc\\Loader::autoload');//将IMooc模块自动加载文件注册到自动载入

//$db = IMooc\Factory::createDatabase();
//$db = IMooc\Database::getDb();
//$db1 = IMooc\Register::get('db1');
//$db = new IMooc\Database\MySQL();

//var_dump($db);

