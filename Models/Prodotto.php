<?php
class Prodotto
{
    public $image;
    public $title;
    public $price;
    public $marca;
    public $type;
    public $categories;

    public function __construct(String $image, String $title, int $price, String $marca, String $type, array $categories = [])
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->marca = $marca;
        $this->type = $type;
        $this->categories = $categories;
    }
}