<?php
define('BASEDIR', __DIR__);
include BASEDIR.'/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

Common\Object::test();
App\Controller\Home\Index::test();

