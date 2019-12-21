<?php
namespace IMooc;

//观察者模式声明一个基类
abstract class EventGenerator
{
    private $observers = array();
    function addObserver(Observer $observer)
    {
        //观察对象保存到数组中
        $this->observers[] = $observer;
    }
    function notify()
    {
        foreach ($this->observers as $observer){
            $observer->upadate();
        }
    }

}