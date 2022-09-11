<?php

class Movie
{
    public $title, $studio, $rating;

    public function __construct($title, $studio, $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    function GetPG($array)
    {
        return $array['rating'] == 'PG' ? $array['rating'] : 'false';
    }
}

$movie1 = new Movie('Casino Royale', 'Eon Productions', 'PG­13');
$movie2 = new Movie('Glass', 'Buena Vista International', 'PG­13');
$movie3 = new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG');

$movieArray1 = (array) $movie1;
$movieArray2 = (array) $movie2;
$movieArray3 = (array) $movie3;

print_r($movie1->GetPG($movieArray1));
print_r($movie2->GetPG($movieArray2));
print_r($movie3->GetPG($movieArray3));