<?php

namespace Common;
class Loader
{
    static function autoload($class)
    {
        require_once BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}