<?php

require_once("Message.php");

//echo car::getPrice("Nissan","2015", "300");
//
//$car = new Car("Honda", "2015", "120");
//
//$car->show();

CarNew::$message = "Some text";

echo CarNew::showMessage();

