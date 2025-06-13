<?php

namespace App\Cars;

class Tax
{
    public function getTax() {
        if ($this->hp >= 300) return 500;
        if ($this->hp >= 120 && $this->hp <300) return 300;
        if ($this->hp < 120) return 50;
    }

}