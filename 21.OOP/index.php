<?php

require_once("CarNew.php");


$car = new CarNew("Honda", "2015", "320");

var_dump($car->getTax());
print_r($car->info());

