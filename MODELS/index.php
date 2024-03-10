<?php

class Production
{
    public $title;
    public $language;
    public $rating;

    public function __construct(
        // specifico il tipo di parametri
        string $title,
        string $language,
        int $rating
    ) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }

    public static function set_title($title)
    {
        // controllo che ci sia il titolo
        if (empty($title))
            return;

        // mi assicuro che la prima lettera sia maiuscola
        $this->title = ucfirst($title);

    }

    public static function get_title()
    {
        return $this->title;
    }
}

// creo due produzioni
// produzione 1
$film = new Production('Film', 'en', 7);
var_dump($film);

// produzione 2
$serie_tv = new Production('Serie TV', 'en', 7);
var_dump($serie_tv);
