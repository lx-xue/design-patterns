<?php
namespace IMooc;

//php策略模式(同适配器模式使用接口类限定)还可实现依赖倒置和控制反转
//利用策略模式对男性和女性展示不同的广告场景实例
interface UserStrategy
{
    function showAd();
    function showCategory();
}
