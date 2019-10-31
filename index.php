<?php
define('BASEDIR', __DIR__);
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

$db=Common\Database::getInstance();
$db=Common\Factory::createDatabase();

\Common\Register::get('db1');