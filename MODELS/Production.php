<?php

require_once __DIR__ . "/Genre.php";

class Production
{
    public $title;
    public $language;
    public $rating;
    public $genre;

    public function __construct(
        // specifico il tipo di parametri
        string $title,
        string $language,
        int $rating,
        Genre $genre
    ) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
        $this->genre = $genre;
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