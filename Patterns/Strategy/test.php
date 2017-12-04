<?php

namespace Patterns\Strategy;
//include 'UserStrategy.php';
//include 'MaleUserStrategy.php';
//include 'FemaleUserStrategy.php';

/**
 * Class test
 * 策略模式
 */

class test
{
    protected $strategy;
    function index()
    {
        echo "AD:";
        $this->strategy->showAd();
        echo "<br/>";

        var_dump($this->strategy);

        echo "Category:";
        $this->strategy->showCategory();
        echo "<br/>";
    }

    function setStrategy(UserStrategy $strategy)
    {
        return $this->strategy = $strategy;
    }
}

$page = new test;
if (isset($_GET['female'])) {
    $strategy = new \Patterns\Strategy\FemaleUserStrategy();
} else {
    $strategy = new \Patterns\Strategy\FemaleUserStrategy();
}
$page->setStrategy($strategy);
//var_dump($page->setStrategy($strategy));
$page->index();
