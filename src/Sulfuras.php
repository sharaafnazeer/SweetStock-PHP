<?php


namespace App;


class Sulfuras extends MainItem implements IStock
{

    public function __construct($quality, $sellIn)
    {
        $quality = 80;
        parent::__construct($quality, $sellIn);
    }

    public function tick()
    {
    }
}