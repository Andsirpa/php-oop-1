<?php
// recupero il modello
require_once __DIR__ . "/../MODELS/Production.php";

// creo due produzioni
// produzione 1
$film = new Production('Film', 'en', 7);


// produzione 2
$serie_tv = new Production('Serie TV', 'en', 7);


$productions = [
    $film,
    $serie_tv
];
var_dump($productions);
