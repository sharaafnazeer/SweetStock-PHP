<?php

namespace App;

class SweetStock
{
    protected static $items = [
        'normal' => Normal::class,
        'Aged Brie' => AgedBrie::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackPass::class,
        'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
        'Conjured Mana Cake' => Conjured::class
    ];

    public static function of($name, $quality, $sellIn)
    {
        $class = isset(static::$items[$name])
            ? static::$items[$name]
            : MainItem::class;

        return new $class($quality, $sellIn);
    }
}
