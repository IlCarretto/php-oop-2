<?php
require_once __DIR__ . "/Models/Prodotto.php";
require_once __DIR__ . "/Models/Categoria.php";

$categories = [
    new Category("Cane"),
    new Category("Gatto")
]

$cibo = new Prodotto("croccantini.jpg", "Croccantini", 12.99, "Monge", "Cibo", new Category("Cane"));
var_dump($cibo);
