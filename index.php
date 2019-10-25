<?php
define('BASEDIR', __DIR__);
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

// 魔术方法
$obj=new Common\Object();
echo $obj;
echo $obj();
// $obj->test("hello","world");
echo Common\Object::test("hello","world");
$obj->title="hello\n";
echo $obj->title;

// 链式操作
$db=new Common\Database();
$db->where("id=1")->where("name=2")->order("id desc")->limit(10);
//栈 先进后出
$stack = new SplStack();
$stack->push("data1\n");
$stack->push("data2\n");
echo $stack->pop();
echo $stack->pop();
//队列 先进先出
$queue= new SplQueue();
$queue->enqueue("res1\n");
$queue->enqueue("res2\n");
echo $queue->dequeue();
echo $queue->dequeue();
// 堆
$heap=new SplMinHeap();
$heap->insert("heap1\n");
$heap->insert("heap2\n");
echo $heap->extract();
echo $heap->extract();

Common\Object::test();
App\Controller\Home\Index::test();

