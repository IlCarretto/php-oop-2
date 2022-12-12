<?php
require_once __DIR__ . "/Models/Prodotto.php";
require_once __DIR__ . "/Models/Categoria.php";

$categories = [
    new Category("Cane"),
    new Category("Gatto")
]

$cibo = new Prodotto("croccantini.jpg", "Croccantini", 12.99, "Monge", "Cibo", $categories[0]);
var_dump($cibo);
