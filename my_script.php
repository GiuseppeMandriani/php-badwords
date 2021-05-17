<?php
// Esempio script da terminale


// $argv[0] è il nome del file che viene eseguito dal comando php

$nome = $argv[1];
$cognome = $argv[2];

// Stampare qualcosa in console
echo 'Ciao in console, ' . $nome . ' ' . $cognome . '!';

echo $argv[0];

?>