<?php
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto {
    public $expire_date;

    function __construct($image, $title, $price, $marca, $type, $categories, ExpireDate $expire_date)
    {
        parent::__construct
    }
}