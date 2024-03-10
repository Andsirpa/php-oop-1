<?php
// recupero il modello
require_once __DIR__ . "/../MODELS/Production.php";
require_once __DIR__ . "/../MODELS/Genre.php";

// creo due produzioni
// produzione 1
$film = new Production('Film', 'en', 7, new Genre('avventura', 'tanta suspance'));


// produzione 2
$serie_tv = new Production('Serie TV', 'en', 7, new Genre('commedia', 'fa un botto ridere'));


$productions = [
    $film,
    $serie_tv
];
var_dump($productions);
