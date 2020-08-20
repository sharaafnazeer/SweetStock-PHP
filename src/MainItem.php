<?php


namespace App;


class MainItem
{
    public $quality;

    public $sellIn;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

}