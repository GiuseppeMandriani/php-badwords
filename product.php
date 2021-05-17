<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Richiamo i dati che mando in query String da index -->
<?php
$prod = $_GET['name'];
$brand = $_GET['brand'];

?>



<header>
    <h1>Nome Prodotto: <?php echo $prod; ?></h1>
    <h3>Brand: <?php echo $brand; ?></h3>
</header>
    
</body>
</html>