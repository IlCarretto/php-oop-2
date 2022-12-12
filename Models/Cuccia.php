<?php
require_once __DIR__ . "/Prodotto.php";

class Cuccia extends Prodotto
{
    public $material;
    public $weight;
    public $is_open;

    function __construct($image, $title, $price, $marca, $type, $categories, $material, $weight, $is_open)
    {
        parent::__construct($image, $title, $price, $marca, $type, $categories);
        $this->material = $material;
        $this->weight = $weight;
        $this->is_open = $is_open;
    }
}
