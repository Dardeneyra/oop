<?php

require_once "CarDetails.php";

class CarNew extends CarDetails{
    protected $model;
    protected $year;
    protected $hp;

    public function __construct($model, $year, $hp) {
        $this->model = $model;
        $this->year = $year;
        $this->hp = $hp;
    }

    public function info() {
        $price = $this->getPrice();
        $reviewText = $this->reviewText();

        echo "
        <div style='padding: 20px; background: bisque; font-family: monospace; border-radius: 25px;'>
            <h2>Model: $this->model</h2>
            <h4>Year: $this->year</h4>
            <h2>HP: $this->hp</h2>
            <h2>Price ~ $price $</h2>
            <h2>Review: $reviewText</h2>
        </div>
        ";
    }

    private function getPrice() {
        $this->price = 0;

        if($this->model == "Honda") {
            $this->price += 2500;
        } elseif ($this->model == "Nissan") {
            $this->price += 4500;
        }

        if($this->hp > 200) {
            $this->price -= 100;
        } elseif ($this->hp > 150) {
            $this->price -= 300;
        } elseif ($this->hp > 100) {
            $this->price -= 600;
        }

        if($this->year > 2015) {
            $this->price += 300;
        } elseif ($this->year > 2010) {
            $this->price += 100;
        } elseif ($this->year > 2005) {
            $this->price += 30;
        }

        return $this->price;
    }
}
