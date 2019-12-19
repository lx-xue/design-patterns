<?php

namespace IMooc;

//php策略模式(同适配器模式使用接口类限定)
//利用策略模式对男性和女性展示不同的广告场景实例
class FemaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo '最新女装连衣裙';
    }

    function showCategory()
    {
        echo '女装';
    }
}
