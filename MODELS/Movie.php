<?php

require_once __DIR__ . "/Production.php";
// extend= è figlia di e ne eredità tutte le caratteristiche
class Movie extends Production
{
    // proprietà da gestire (profits and duration)
    public $profits;
    public $duration;
    public function __construct(
        string $title,
        string $language,
        int $rating,
        array $genres,
        int $duration,
        // uso float per gestire numeri con le virgole
        float $profits,
    ) {
        // invoco il costruttore del genitore
        parent::__construct($title, $language, $rating, $genres, );

        $this->duration = $duration;
        $this->profits = $profits;
    }
}
