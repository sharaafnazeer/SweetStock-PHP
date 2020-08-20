<?php


namespace App;


class BackPass extends MainItem implements IStock
{
    public function tick()
    {
        $this->sellIn -= 1;

        if ($this->sellIn < 0) {
            return $this->quality = 0;
        }

        $this->quality += 1;

        if ($this->sellIn < 10) {
            $this->quality += 1;
        }

        if ($this->sellIn < 5) {
            $this->quality += 1;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }
}