<?php

namespace App\Cars;

class Details extends Tax
{
    protected $models = [
        "BMW" => 5000,
        "Honda" => 3000,
        "Lada" => 1500
    ];

    protected function price() {
        $price = 0;

        if (!$this->models[$this->model]) {
            return "модель не найдена";
        }

        $price += $this->models[$this->model];

        if ($this->year >= 2015) $price += 1000;
        if ($this->year >= 2000 && $this->year < 2015) $price += 500;
        if ($this->year < 2000) $price += 400;

        return $price;
    }
}
