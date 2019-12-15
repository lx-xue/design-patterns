<?php
//入口文件
define("BASEDIR",__DIR__);//定义网站根目录
include BASEDIR.'/IMooc/Loader.php';//加载IMooc模块

spl_autoload_register('\\IMooc\\Loader::autoload');//将IMooc模块自动加载文件注册到自动载入

IMooc\Object_01::test();
App\Controller\Home\Index::test();

