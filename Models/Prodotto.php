<?php
require_once __DIR__ . "/Categoria.php";
class Prodotto
{
    public $image;
    public $title;
    public $price;
    public $marca;
    public $type;
    public $categories;

    public function __construct(String $image, String $title, float $price, String $marca, String $type, Categoria $categories)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->marca = $marca;
        $this->type = $type;
        $this->categories = $categories;
    }

    public function getDetails()
    {
        return "Price: {$this->price}; Marca: {$this->marca}";
    }
}
