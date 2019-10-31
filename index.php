<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/Common/Loader.php';
spl_autoload_register('\\Common\\Loader::autoload');

// echo '<met>'
class Page
{
    protected $strategy;

    function index()
    {
        echo "AD:";
        $this->strategy->showAd();
        echo "<br/>";
        echo "Category:";
        $this->strategy->showCategory();
        echo "<br/>";
    }

    function setStrategy(\Common\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}

$page = new Page();
if (isset($_GET['female'])) {
    $strategy = new \Common\FemaleUserStrategy();
} else {
    $strategy = new \Common\MaleUserStrategy();
}
$page->setStrategy($strategy);
$page->index();
