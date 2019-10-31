<?php
namespace Common;

class Factory
{
    static function createDatabase(){
        // $db=new Database();
        $db =Database::getInstance();
        Register::set('db1',$db);
        return $db;
    }
}