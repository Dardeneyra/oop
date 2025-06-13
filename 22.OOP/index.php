<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Other\Other;

$car = new App\Cars\Car("Honda", "2014", "140");

$car->show();

Other::test();

?>

<i><h3>Налог за авто ~ <?= $car->getTax() ?>$</h3></i>
