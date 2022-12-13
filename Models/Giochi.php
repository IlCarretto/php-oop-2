<?php
require_once __DIR__ . "/Prodotto.php";

class Giochi extends Prodotto
{
    public $material;
    public $color;
    public $texture;

    function __construct($image, $title, $price, $marca, $type, $categories, $material, $color, $texture)
    {
        parent::__construct($image, $title, $price, $marca, $type, $categories);
        $this->material = $material;
        $this->color = $color;
        $this->texture = $texture;
    }

    public function getDetails()
    {
        return "Price: {$this->price}; Marca: {$this->marca}; Material: {$this->material}; Color: {$this->color}; Texture: {$this->texture}";
    }
}
