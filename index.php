<?php
require_once __DIR__ . '/classes/products.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>
    <header>
        <h1>Ecco il nostro negozio!</h1>
    </header>

    <main>
        <section>
            <!-- Instanza Product -->
            <?php 
            $product1 = new Product('Crema all\'aloe', 'Corpo', 35, 27.99 );
            var_dump($product1);
            ?>
            <h3>
                Nome prodotto:
                <?php 
                echo $product1->getName();
                ?>
            </h3>
        </section>
    </main>

</body>
</html>