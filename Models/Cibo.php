<?php
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto
{
    public $expire_date;

    function __construct($image, $title, $price, $marca, $type, $categories, $expire_date)
    {
        parent::__construct($image, $title, $price, $marca, $type, $categories);
        $this->expire_date = $expire_date;
    }
}
