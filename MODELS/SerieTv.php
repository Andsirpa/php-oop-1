<?php

require_once __DIR__ . "/Production.php";

class SerieTv extends Production
{
    // proprietà da gestire (season and episode)
    public $season;
    public $episode;

    public function __construct(
        string $title,
        string $language,
        string $rating,
        string $genres,
        int $season,
        int $episode,
    ) {
        parent::__construct($title, $language, $rating, $genres);
        $this->season = $season;
        $this->episode = $episode;
    }
}