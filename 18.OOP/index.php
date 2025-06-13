<?php

require_once "functions.php";
require_once "name.php";

$names = ["Alex","Ivan","Roman"];

$name = new Name();
$name->names = $names;

$name->remove_name = "Alex";
$name->remove_name();

print_r($name->remove_name());

