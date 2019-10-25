<?php
//魔术方法
namespace Common;
class Object
{
    protected $array=array();
    function __set($name, $value)
    {
        var_dump(__METHOD__);
        $this->array[$name]=$value;
    }

    function __get($name)
    {
        var_dump(__METHOD__);
        return $this->array[$name];
    }

    // function __call($name, $arguments)
    // {
    //     var_dump($name,$arguments);
    //     return "magic fuction\n";
    // }

    static function __callStatic($name, $arguments)
    {
        var_dump($name,$arguments);
        return "magic fuction\n";
    }

    function __toString()
    {
        return __CLASS__;
    }

    function __invoke()
    {
        return "invoke";
    }
}