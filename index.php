<?php
require_once __DIR__ . "/Models/Prodotto.php";
require_once __DIR__ . "/Models/Categoria.php";
require_once __DIR__ . "/Models/Cibo.php";
require_once __DIR__ . "/Models/Giochi.php";
require_once __DIR__ . "/Models/Cuccia.php";

$corda = new Prodotto("corda.jpg", "Corda", 9.99, "Unknown", "Prodotto", new Categoria("Cane"));

$croccantini = new Cibo("croccantini.jpg", "Croccantini", 12.99, "Monge", "Cibo", new Categoria("Gatto"), "25/12/20");

$osso = new Giochi("osso.jpg", "Osso", 3.99, "Unknown", "Gioco", new Categoria("Cane"), "Cotone", "Bianco", "Morbido");

$cuccia = new Cuccia("cuccia.jpg", "Cuccia", 16.99, "Natural Trainer", "Cuccia", new Categoria("Gatto"), "Plastica", "1kg", "Aperta");

$products = [
    $corda,
    $croccantini,
    $osso,
    $cuccia
];

// var_dump($corda);
// var_dump($croccantini);
// var_dump($osso);
// var_dump($cuccia);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h2 class="text-center">Acquista qui i nostri prodotti!</h2>
        <div class="row row-cols-4">
            <?php foreach ($products as $product) { ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $product->image; ?>" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo $product->title ?>
                            </h4>
                            <p class="card-text">
                                <?php echo $product->getDetails() ?>
                            </p>
                            <p class="card-text">
                                <?php echo $product->type ?>
                            </p>
                        </div>
                        <!-- <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul> -->
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>

</html>