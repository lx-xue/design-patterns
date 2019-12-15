<?php

// php spl常用的数数据类型
$stack = new SplStack();//栈 (先入后出)
//入栈
$stack->push("data1\n");
$stack->push("data2\n");

//出栈
echo $stack->pop();
echo $stack->pop();

$queue = new SplQueue();//队列 (先入先出)
//入队列
$queue->enqueue('data1');
$queue->enqueue('data2');

//出队
echo $queue->dequeue();
echo $queue->dequeue();

$head = new SplMinHeap();//最小堆 (先入先出)
//入堆
$head->insert('data1');
$head->insert('data2');

//出堆
echo $head->extract();
echo $head->extract();

$array = new SplFixedArray(10);//固定长度的数组
//添加
$array[0]=123;
$array[9]=999;
//获取
var_dump($array);