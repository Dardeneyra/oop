<?php

class Message {
    private $model;
    private $year;
    private $hp;

    public static $message;

 public function __construct($model, $year, $hp) {
     $this->model = $model;
     $this->year = $year;
     $this->hp = $hp;
 }

 public function show() {
     $price = self::getPrice($this->model, $this->year, $this->hp);
     echo "
     <div style = 'padding: 20px; background: bisque; font-family: monospace; border-radius: 25px;'>
     <h2>Model:$this->model</h2>
     <h4>Year:$this->year</h4>
     <h2>HP:$this->hp</h2>
     <h2>Price ~ $price $</h2>
     </div>
     ";
 }

 public static function getPrice($model, $year, $hp) {
     $price = 0;

     if($model == "Honda") {
     $price += 2500;
     } elseif ($model == "Nissan") {
         $price += 4500;
     }

     if($hp > 200) {
         $price -= 100;
     } elseif ($hp > 150 && $hp < 200) {
         $price -= 300;
     } elseif ($hp >100 && $hp < 150) {
         $price -= 600;
     }

     if($year > 2015) {
         $price += 300;
     } elseif ($year > 2010 && $year < 2015) {
         $price += 100;
     } elseif ($year > 2005 && $year < 2010) {
         $price += 30;
     }

     return $price;
 }

 public static function showMessage() {
     return self::$message;
 }




}