<?php
require_once __DIR__ . "/Models/Prodotto.php";
require_once __DIR__ . "/Models/Categoria.php";

$categories = [
    new Categoria("Cane"),
    new Categoria("Gatto")
]

$cibo = new Prodotto("croccantini.jpg", "Croccantini", 12.99, "Monge", "Cibo", new Categoria("Cane"));
var_dump($cibo);
