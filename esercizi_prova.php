<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Esercizi Prove -->

    <h2>Prove di php</h2>

    <!-- Esempio Statico -->
    <?php
    #Creazione variabile
    $name = 'Giuseppe Mandriani';
    $age = 32;
    $status = true;
    ?>

    <h3>Welcome, Sono <?php echo $name; ?> ho <?php echo $age; ?> anni</h3>


    <!-- Esempio Dinamico  -->

    <!-- Parametri Get tramite Query String -->

    <?php
    // GET Data from Query String

    // Prendo valori assegnati all'url nella query string

    // Global Array

    $first_name = $_GET['first'];       // $_GET Nativo nell'array metterò i parametri utilizzati nella query string
    $last_name = $_GET['last'];

    echo $_GET;     // Mostra la tipologia

    ?>



    <h1>Welcome, <?php echo $first_name; ?> <?php echo $last_name; ?></h1>

    <!-- Esempio in pagina secondaria -->
    <a href="./product.php?name=iMac&brand=Apple">Visit Product</a>




    <!-- STRING METHODS -->

    <!-- Explode    Nuovo Array dividendo con delimitatore la stringa-->

    <?php

    $text = 'Benvenuto nel sito';
    $word = explode(' ', $text);   // Ottengo Array con parole divise da uno spazio e lo stampo in una lista

    ?>

    <ul>
        <li><?php echo $word[0]?></li>
        <li><?php echo $word[1]?></li>
        <li><?php echo $word[2]?></li>
    </ul>

    <!-- str_replace('cosamofidicare', 'concosamodificare', $stringa)    cambierà valore di una una stringa in un altro -->

    <?php 
    $telephone_number = 'Controlla se il tuo numero di telefono finisce con 3331234567';
    $replaced = str_replace('3331234', '***', $telephone_number);

    ?>

    <p><?php echo $replaced;?></p>



    <!-- VAR DUMP              Serve per dati più strutturati Array, Object  -->   

    <?php
    $my_arr = ['Giuseppe', 'Michele', 'Aldo'];

    // Visualizzare elementi array a schermo

    var_dump($my_arr);      // MEtodo in linea


    echo '<pre>';
    var_dump($my_arr);      // Maniera più ordinata
    echo '</pre>';

    ?>


    
</body>
</html>