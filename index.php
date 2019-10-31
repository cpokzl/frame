<?php
define('BASEDIR', __DIR__);
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

$db=new Common\Database\PDO();
$db->connect('127.0.0.1','root','87609877','vcoin');

$data=$db->query("select * from vc_user");
var_dump($data);
$db->close();
