<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Welcome php, Esercizio 1</h1>


    <!-- Creazione Variabile -->
    <?php

    // Dichiarazione Variabile
    $paragraph = 'Suspendisse potenti. Donec sit amet lacus scelerisque, aliquet lacus nec, pulvinar dui. Curabitur eget porttitor diam, ut maximus nunc. Donec accumsan diam sit amet aliquet gravida. Aenean tincidunt diam in sagittis placerat. Morbi dolor lacus, suscipit vel elementum a, dignissim ac metus. Pellentesque dignissim convallis lectus, sed bibendum tortor tristique eget. Proin tortor tellus, condimentum eget bibendum eget, aliquam sit amet orci. Donec nec cursus orci, sed imperdiet nibh. Donec tincidunt lorem tortor, ut vulputate elit vestibulum non. Morbi hendrerit dictum tempor. Maecenas aliquam, mauris sit amet mollis tempus, tortor ipsum lobortis nibh, ac aliquet lectus augue at enim. Morbi posuere sapien sed purus pellentesque, id tempus urna mattis. Vestibulum imperdiet justo non orci tincidunt, sed sagittis sapien vulputate';
    

    // Lunghezza stringa 

    $length = strlen($paragraph);

    // METODO NO QUERY STRING



    // Parola da modificare  

    $replaced = str_replace('tortor','***', $paragraph);

    // Posizione parola nascosta

    $word = strpos($paragraph, 'tortor')

    ?>

    <h2>Paragrafo per esercizio</h2>
    <p><?php echo $paragraph; ?></p>
    <p>Il Paragrafo contiene <?php echo $length; ?> caratteri.</p>
    <p><?php echo $replaced; ?></p>
    <p><?php echo $word; ?></p>


    <!-- METODO QUERY STRING -->



    <!-- GET Data from Query String -->

    <?php
    // GET Data from Query String

    // Prendo valori assegnati all'url nella query string

    // Global Array

    $word = $_GET['badword'];       // $_GET Nativo nell'array metterò i parametri utilizzati nella query string

    echo $_GET['badword'] ;    // Mostra la tipologia

    $replacedTwo = str_replace($word ,'***', $paragraph);

    ?>

    <p><?php echo $replacedTwo; ?></p>


    <a href="./esercizi_prova.php">vai a Esercizi di prova</a>


















</body>
</html>