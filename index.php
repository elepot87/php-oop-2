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
        <div class="prodotto">
        <!-- Istanza Product -->
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
            <div class="category">
                Categoria:
                <?php echo $product1->getCategory(); ?>
            </div>
            <div class="magazzino">
                Magazzino:
                <?php echo $product1->getQuantity(); ?>
            </div>
            <div class="price">
                Prezzo: 
                <?php echo $product1->getPrice(); ?> €
            </div>
        </div>  
        <div class="prodotto">
        <!-- Istanza Product -->
            <?php 
            $product2 = new Clothes('T-shirt', 'Abbigliamento', 50, 16.99, 'M' );
            var_dump($product2);
            ?>
            <h3>
                Nome prodotto:
                <?php 
                echo $product2->getName();
                ?>
            </h3>
            <div class="category">
                Categoria:
                <?php echo $product2->getCategory(); ?>
            </div>
            <div class="magazzino">
                Magazzino:
                <?php echo $product2->getQuantity(); ?>
            </div>
            <div class="price">
                Prezzo: 
                <?php echo $product2->getPrice(); ?> €
            </div>
            <div class="size">
                Taglia: 
                <?php echo $product2->getSize(); ?> 
            </div>
        </div>  
        </section>
    </main>

</body>
</html>