<?php
//IMooc 模块自动加载类
namespace IMooc;
class Loader
{
    static function autoload($calss)
    {

        require BASEDIR.'/'.str_replace('\\','/',$calss).'.php';

    }
}