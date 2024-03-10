<?php

class Production
{
    public $title;
    public $language;
    public $rating;

    public function __construct($title, $language, $rating)
    {
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