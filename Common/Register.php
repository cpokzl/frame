<?php
namespace Common;

class Register
{
    protected  static $object;
    static function set($alias,$object){
        return self::$object[$alias]=$object;
    }

    static function get($name){
        return self::$object[$name];
    }

    function _unset($alias){
        unset(self::$object[$alias]);
    }
}